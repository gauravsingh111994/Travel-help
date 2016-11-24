<?php

session_start();
include 'password.php';

include 'menu1.html';


$id=$_GET['id'];
$idq=$_GET['idq'];
$type=$_GET['type'];


mysql_select_db('main');
$query="SElECT * from $type where id=$id;";
$fetch=mysql_query($query);
$row=mysql_fetch_assoc($fetch);
$username=$row['username'];

$sdb=mysql_select_db($username) or die("no database");
$typo=$type."question";

$query="SELECT * from $typo where id='$idq'";
$fetch=mysql_query($query) or die("not selected");


$query1="SELECT * from info";
$fetch1=mysql_query($query1) or die("not selected");

$row1=mysql_fetch_assoc($fetch1);
$qa=$row1['qa'];
$q=$row1['q'];

$row=mysql_fetch_assoc($fetch);
if($row['answer']!=NULL)
$qa--;

$q--;

$query="UPDATE info SET qa='$qa',q='$q' where 1";
mysql_query($query) or die("not");








$query="DELETE from $typo where id='$idq'";
mysql_query($query) or die("not deleted");







$url=$_SESSION['url'];

header("location:$url");


?>