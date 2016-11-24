<?php

session_start();
$search=$_POST['search'];
$search=strtoupper($search);
$_SESSION['search']=$search;

header("location:search.php");


?>