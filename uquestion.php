<?php

session_start();
include 'password.php';
mysql_select_db('main');
$id=$_GET['id'];
$type=$_GET['type'];
echo $id;
$query="SELECT * from $type where id=$id;";

$fetch=mysql_query($query) or die("sorry");
$row=mysql_fetch_assoc($fetch) or die("sorry");
$username=$row['username'];
mysql_select_db($username);
$query="SELECT * from info";
$fetch=mysql_query($query) or die("sorry");
$row=mysql_fetch_assoc($fetch) or die("sorry");
$q=$row['q']+1;

echo $q;
$query="UPDATE info SET q='$q' WHERE 1";
$f=mysql_query($query) or die("not updated");

$search=$_SESSION['search'];
$tableq=$type."question";
$question=$_POST['question'];
$u=$_SESSION['u'];
$query="INSERT INTO $tableq (user,question,place) VALUES('$u','$question','$search')";
$f=mysql_query($query) or die("not inserted");
$not=$u." posted a question";
$query="INSERT INTO notification (noti,flag) VALUES ('$not','1');";
mysql_query($query);
$url=$_SESSION['url'];

header("location:profile.php?id=$id&type=$type");






?>