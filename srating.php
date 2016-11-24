<?php

session_start();

$user=$_SESSION['username'];
include 'password.php';
ECHO $user;
mysql_select_db($user);

$query="SELECT * from info";

$run=mysql_query($query);
while($row=mysql_fetch_assoc($run))
{
	
	$nou=$row['nou'];
$rat=$row['rating'];}

	$total=($rat*$nou)+$_POST['star'];
	$nou=$nou+1;
	$rat=round($total/$nou,1);
	echo $rat;
	$query="UPDATE info SET nou='$nou', rating='$rat' where 1";
	mysql_query($query);
	
	$url=$_SESSION['url'];
	header("location:$url");
	?>
	
	
	
