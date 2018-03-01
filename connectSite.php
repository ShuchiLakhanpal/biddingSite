<?php
session_start();

//$page = 'bid.php';

$con = mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db( $con, 'bid_sell_books') or die(mysqli_error());


echo("Test");

?>