<?php


session_start();
include 'menu1.html';
include 'password.php';
$type=$_GET['type'];
$user=$_GET['user'];
$place=$_GET['place'];

mysql_select_db($user);
if($type=="recommended")
{
	
$rec=strtoupper($_POST['rec']);	
$rec1=strtoupper($_POST['rec']);
mysql_select_db("main");
$query="SELECT * from recommended where place='$rec'";
$run=mysql_query($query);


if(mysql_num_rows($run)==0)
{
	
	$rec=$rec."+".$place;
	$_SESSION['add']=$rec;
	include 'location.php';
	$latitude=$_SESSION['ulat'];
	$longitude=$_SESSION['ulong'];
	$query="INSERT INTO recommended (place, city, nou, latitude, longitude) VALUES('$rec1','$place','1','$latitude','$longitude')";
	mysql_query($query) OR DIE("NOT INSERTED");
	
	
}

else
{
	$row=mysql_fetch_assoc($run);
	$nou=$row['nou'];
	$nou++;
	$query="UPDATE recommended SET nou='$nou' where place='$rec'";
	mysql_query($query);
	
}

mysql_select_db($user);
$query="INSERT INTO recommended (city,place) VALUES('$place','$rec1')";
mysql_query($query);


	
}

if($type=="shopping")
{
	
$rec=strtoupper($_POST['shop']);	
$rec1=strtoupper($_POST['shop']);
mysql_select_db("main");
$query="SELECT * from shopping where place='$rec'";
$run=mysql_query($query);


if(mysql_num_rows($run)==0)
{
	
	$rec=$rec."+".$place;
	$_SESSION['add']=$rec;
	include 'location.php';
	$latitude=$_SESSION['ulat'];
	$longitude=$_SESSION['ulong'];
	$query="INSERT INTO shopping (place, city, nou, latitude, longitude) VALUES('$rec1','$place','1','$latitude','$longitude')";
	mysql_query($query) OR DIE("NOT INSERTED");
	
	
}

else
{
	$row=mysql_fetch_assoc($run);
	$nou=$row['nou'];
	$nou++;
	$query="UPDATE shopping SET nou='$nou' where place='$rec'";
	mysql_query($query);
	
}

mysql_select_db($user);
$query="INSERT INTO shopping (city,place) VALUES('$place','$rec1')";
mysql_query($query);


	
}
if($type=="food")
{
	
$rec=strtoupper($_POST['food']);	
$rec1=strtoupper($_POST['food']);
mysql_select_db("main");
$query="SELECT * from food where place='$rec'";
$run=mysql_query($query);


if(mysql_num_rows($run)==0)
{
	
	$rec=$rec."+".$place;
	$_SESSION['add']=$rec;
	include 'location.php';
	$latitude=$_SESSION['ulat'];
	$longitude=$_SESSION['ulong'];
	$query="INSERT INTO food (place, city, nou, latitude, longitude) VALUES('$rec1','$place','1','$latitude','$longitude')";
	mysql_query($query) OR DIE("NOT INSERTED");
	
	
}

else
{
	$row=mysql_fetch_assoc($run);
	$nou=$row['nou'];
	$nou++;
	$query="UPDATE food SET nou='$nou' where place='$rec'";
	mysql_query($query);
	
}

mysql_select_db($user);
$query="INSERT INTO food (city,place) VALUES('$place','$rec1')";
mysql_query($query);


	
}

$url=$_SESSION['url'];
header("location:$url");

?>