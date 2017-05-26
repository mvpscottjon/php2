<?php
include '20170526_api_V3.php';

//$mybike = new scooter();


if(TWId::checkID('A12346789')==1){
    $myId = new TWId('a12345678');
    echo $myId->getGender()?'male':'femal';

}else{}
