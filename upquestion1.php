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
$question=$_POST['quest'];
echo $question;
$query="UPDATE $typo SET question= '$question' where id='$idq'";
mysql_query($query) or die("not updated");
$url=$_SESSION['url'];
header("location:$url");

?>
 