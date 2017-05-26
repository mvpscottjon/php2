<?php
$img = imagecreatefromjpeg ( "./fileupload/pika.jpg");

$red=imagecolorallocate ( $img , 255, 0, 0);

imagettftext ( $img , 24 , 0 , 50 , 50 , $red , "./fonts/fireflysung.ttf", "testtest" );


header('Content-Type:image/jpeg');

imagejpeg($img);




imagedestroy($img);