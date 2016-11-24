<?php

session_start();
include 'password.php';
mysql_select_db('main');


$idq=$_SESSION['idq'];
$id=$_SESSION['id'];
$type=$_SESSION['type'];
echo $type;
$query="SELECT * from $type where id=$id;";

$fetch=mysql_query($query) or die("sorry");
$row=mysql_fetch_assoc($fetch) or die("sorry");
$username=$row['username'];
mysql_select_db($username);
$query="SELECT * from info";
$fetch=mysql_query($query) or die("sorry");
$row=mysql_fetch_assoc($fetch) or die("sorry");
$qa=$row['qa']+1;



$tableq=$type."question";
echo $tableq;
$answer=$_POST['answer'];
$u=$_SESSION['u'];
$query="UPDATE $tableq SET answer='$answer' where id='$idq';";
$f=mysql_query($query) or die("not updated");
$query="UPDATE info SET qa='$qa' WHERE 1";
$f=mysql_query($query) or die("not updated");
$url=$_SESSION['url'];

header("location:$url");





?>