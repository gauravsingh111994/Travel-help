<?php
session_start();
include 'menu.html';
$dbhost = 'localhost';
$dbuser = 'root';
$pass = '';
$connect = mysql_connect($dbhost,$dbuser,$pass) or die('no database');


mysql_select_db('main');
$u=$_POST['username'];
$p=$_POST['pass'];
$query="SELECT * from username where username='$u';";
$fetch=mysql_query($query) or die("no such user");

$row=mysql_fetch_assoc($fetch);
if($row['password']==$p)
{
	
	$flag=1;
	$_SESSION['flag']=$flag;
	$url=$_SESSION['url'];
	header("location:$url");
	
	
}
else
{
	
	
	
	echo "incorrect password ";
}
//session part
$_SESSION['u']=$u;
?>
