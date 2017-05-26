<?php

///*********物件導向

include "20170523_api_V2.php";



$mybike = new bike();
$urbike = new bike();

$mybike->upspeed();$mybike->upspeed();$mybike->upspeed();
$urbike->downspeed();
echo 'urbike:'.$urbike->getspeed().'<br>';
echo 'mybike:'.$mybike->getspeed().'<br>';

$myscooter = new scooter();
$myscooter->downspeed();
$myscooter->downspeed();
$myscooter->downspeed();
echo "myscooterspeed:{$myscooter->getspeed()}";

