<html>
<head>

</head>

<?php
session_start();

include 'password.php';
// Create database

$username=$_POST['user'];
$email=$_POST['em'];

$pass=$_POST['pass'];




$sql = "CREATE DATABASE $username;";
$query=mysql_query($sql) or die("Please try with another email username");


$select_db = mysql_select_db($username,$connect) or die('no such database');
	
	 // sql to create table
    $ct = "CREATE TABLE info(
    name TEXT,
	dob DATE,
	prof TEXT,
    email TEXT,
	phone TEXT,
	place TEXT,
	qa INT ,
	q INT ,
	rating FLOAT,
	address longtext,
	nou INT);";

	
$query1=mysql_query($ct,$connect) or die("not created");	


    $ct = "CREATE TABLE localquestion(
    id INT NOT NULL AUTO_INCREMENT,
    user TEXT,
	question TEXT,
	answer TEXT,
	place TEXT,
	PRIMARY KEY(id));";

$query1=mysql_query($ct) or die("not created1");	

 $ct = "CREATE TABLE notification(
    noti TEXT,
	flag INT);";

$query1=mysql_query($ct) or die("not created1");
  $ct = "CREATE TABLE localcomment(
    idc INT NOT NULL AUTO_INCREMENT,
	id INT,
    user TEXT,
	comment TEXT,
	PRIMARY KEY(idc));";
	
$query1=mysql_query($ct,$connect) or die("not created2");	

    $ct = "CREATE TABLE visitedquestion(
    id INT NOT NULL AUTO_INCREMENT,
    user TEXT,
	question TEXT,
	answer TEXT,
	place TEXT,
	PRIMARY KEY(id));";

$query1=mysql_query($ct,$connect) or die("not created3");	

  $ct = "CREATE TABLE visitedcomment(
    idc INT NOT NULL AUTO_INCREMENT,
	id INT,
    user TEXT,
	comment TEXT,
	PRIMARY KEY(idc));";
$query1=mysql_query($ct,$connect) or die("not created4");	
	
    $ct = "CREATE TABLE localreview(
    id INT NOT NULL AUTO_INCREMENT,
    rec TEXT,
	food TEXT,
	shop TEXT,
	place TEXT,
	misc TEXT,
	PRIMARY KEY(id));";
	$query1=mysql_query($ct,$connect) or die("not created4");
	
	
	 $ct = "CREATE TABLE recommended(
    id INT NOT NULL AUTO_INCREMENT,
    city TEXT,
	place TEXT,
	PRIMARY KEY(id));";
	$query1=mysql_query($ct,$connect) or die("not created4");
		 $ct = "CREATE TABLE shopping(
    id INT NOT NULL AUTO_INCREMENT,
    city TEXT,
	place TEXT,
	PRIMARY KEY(id));";
	$query1=mysql_query($ct,$connect) or die("not created4");
		 $ct = "CREATE TABLE food(
    id INT NOT NULL AUTO_INCREMENT,
    city TEXT,
	place TEXT,
	PRIMARY KEY(id));";
	$query1=mysql_query($ct,$connect) or die("not created4");
$up="INSERT INTO info(email,qa,q,rating,nou) VALUES('$email',0,0,0.0,0)";
$query=mysql_query($up,$connect) or die("not updated");
	
mysql_select_db('main');
   

 
$up="INSERT INTO username(username,password) VALUES('$username','$pass')";
$query=mysql_query($up,$connect) or die("not updated");

$_SESSION['u']=$username;
$_SESSION['flag']=1;

mkdir("$username/",0700);

header("location:ubi.php");

?>

</html>