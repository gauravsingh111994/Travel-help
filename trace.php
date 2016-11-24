<?php

session_start();
$ulat=$_GET['width'];
$ulong=$_GET['height'];
$_SESSION['ulat']=$ulat;
$_SESSION['ulong']=$ulong;
header("location:distance.php");
?>