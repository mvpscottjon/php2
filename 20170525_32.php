<?php
$img = imagecreatefromjpeg ( "./fileupload/pika.jpg");

$img2 = imagecreatefrompng ( "./fileupload/pika2.png");

$imgSrc=$img2;


$imgDst =imagecreate(400,200);

$imgX = imagesx ( $imgSrc );

$imgY = imagesy ( $imgSrc );

$imgDX = imagesx ( $imgDst );

$imgDY = imagesy ( $imgDst );


if($imgX > $imgY){
    $imgSrcW = $imgDX;
//    $imgSrcW = 400;
    $imgSrcH = $imgSrcW*$imgDY/$imgSrcW;
//    $imgSrcH = $imgSrcW*200/$imgSrcW;

}else{
    $imgSrcH = $imgDY;
//    $imgSrcH = 200;
    $imgSrcW = $imgSrcH*$imgDX/$imgDY;
//    $imgSrcW = $imgSrcH*400/200;
}



imagecopyresized ( $imgDst , $imgSrc ,
0 , 0 , 0, 0 ,
$imgDX, $imgDY , $imgSrcW,$imgSrcH);

//imagecopyresized ( $imgDst , $imgSrc ,
//    0 , 0 , 400, 400 ,
//    400 , 200 , $imgSrcW,$imgSrcH);




header('Content-Type:image/jpeg');

imagejpeg($imgDst);


imagedestroy($imgSrc);
imagedestroy($imgDst);