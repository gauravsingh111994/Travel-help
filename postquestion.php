<?php


session_start();
include 'password.php';

$quest=$_GET['question'];
$type=$_GET['type'];
$search=$_SESSION['search'];
$u=$_SESSION['u'];
mysql_select_db("main");

$query="SELECT * from $type where place='$search'";
$run=mysql_query($query);
while($row=mysql_fetch_assoc($run))
{
	
	$user=$row['username'];
	mysql_select_db($user);
	if($type=='local')
	{
		
		$query="INSERT into localquestion(user, question) VALUES ('$u','$quest');";
			mysql_query($query);
		
	}
	
	else
	{
		
		$query="INSERT into visitedquestion(user, question) VALUES ('$u','$quest');";
			mysql_query($query);
	}
	
	$query="SELECT * from info";
	$run=mysql_query($query);
	$row=mysql_fetch_assoc($run);
	$name=$row['name'];
	$not=$name." posted a question on you wall";
	$query="INSERT into notification (noti,flag) VALUES('$not','1')";
	mysql_query($query);
	
	echo $user;
}

header("location:search.php");

?>