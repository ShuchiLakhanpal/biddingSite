<?php
session_start();
$con = mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db( $con, 'bid_sell_books') or die(mysqli_error());
//$res = mysqli_query($con, "select ") 
//Sun Nov 23 10:23:16 +0000 2017
$raw = "Sun Nov 23 10:23:16 +0000 2017";
$xplod = str_split($raw, 3, 3);
print_r($xplod);
//$string = "$xplod[5]-$xplod[1]-$xplod[2] $xplod[3]";

//echo"<br>$string";



?>



