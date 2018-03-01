<?php
session_start();

if($_SESSION["signin"] == "true")
{
    $_SESSION["signin"] = "";
    header('Location: register.php');
	exit();
}
