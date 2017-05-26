<?php
include '20170526_api_V3.php';
session_start();


$memberObj = new Member('A123456789');
$cartObj = new Cart($memberObj);

$_SESSION['cart'] = $cartObj;


$cartObj->addlist('P001',rand(1,10));
$cartObj->addlist('P002',rand(1,10));




$list =$cartObj->getlist();  //參數加$memberObj會怎樣?

 foreach ($list as $pid=>$qty) {
     echo $qty."<br>";
 }

?>

 ///換到下一頁
<a href="20170526_36.php">Next</a><br>





