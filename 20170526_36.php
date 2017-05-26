<?php
///session
include '20170526_api_V3.php';
session_start();


if (!isset($_SESSION['cart'])){
    header('Location:20170526_35.php');}

$cartObj = $_SESSION['cart'];

$list =$cartObj->getlist();

foreach ($list as $pid=>$qty) {
    echo $qty."<br>";
}
?>
<a href="logout.php">logout</a><br>