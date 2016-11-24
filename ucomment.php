<?php

session_start();
include 'password.php';
mysql_select_db('main');
$id=$_GET['id'];
$idq=$_GET['idq'];
$type=$_GET['type'];
echo $id;
$query="SELECT * from $type where id=$id;";

$fetch=mysql_query($query) or die("sorry");
$row=mysql_fetch_assoc($fetch) or die("sorry");
$username=$row['username'];
mysql_select_db($username);



$tablec=$type."comment";
$question=$_POST['reply'];
$u=$_SESSION['u'];
$query="INSERT INTO $tablec (id,user,comment) VALUES('$idq','$u','$question')";
$f=mysql_query($query) or die("not inserted");

$url=$_SESSION['url'];

header("location:$url");






?>