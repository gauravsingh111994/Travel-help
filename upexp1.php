<?php


session_start();
include 'password.php';

include 'menu1.html';


$id=$_GET['id'];

$type=$_GET['type'];


mysql_select_db('main');





$exp=$_POST['exp'];
$date=$_POST['date'];
$query="UPDATE $type SET experience= '$exp', date='$date' where id='$id'";
mysql_query($query) or die("not updated");
$url=$_SESSION['url'];
header("location:$url");

?>
 