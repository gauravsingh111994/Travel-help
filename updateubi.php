<?php


session_start();

include 'password.php';
$u=$_SESSION['u'];

$target_dir = "/$u/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

	
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        
        $uploadOk = 1;
		$file_name=$_FILES["fileToUpload"]["name"];

		$l= strlen($file_name);
		$l--;
		$extention=$file_name[$l];
		$l--;
		while($file_name[$l]!='.')
		{
			$extention=$extention.$file_name[$l];
			$l--;
		}
		$extention=strrev($extention);
		$file_name="profile.".$extention;
		$add="$u/$file_name";
		move_uploaded_file ($_FILES["fileToUpload"]["tmp_name"], $add);

		
		
		
    } 



mysql_select_db($u);

$query="SELECT * from info";
$fetch=mysql_query($query);
$row=mysql_fetch_assoc($fetch);

if(($_POST['name'])!=NULL)
{
	$name=$_POST['name'];
	
		
		
		
			$query1="UPDATE info SET name='$name' where 1;";
	mysql_query($query1) ;
		
	
	
	
	
	
}
if(($_POST['dob'])!=NULL)
{
	$dob=$_POST['dob'];
	
		
		
		
			$query1="UPDATE info SET dob='$dob' where 1;";
	mysql_query($query1) ;
		
	
	
	
	
	
}
if(($_POST['profession'])!=NULL)
{
	$prof=$_POST['profession'];
	
		
		
		
			$query1="UPDATE info SET prof='$prof' where 1;";
	mysql_query($query1) ;
		
	
	
	
	
	
}
if(($_POST['phone'])!=NULL)
{
	$phone=$_POST['phone'];
	
		
	
		
			$query1="UPDATE info SET phone='$phone' where 1;";
	mysql_query($query1) ;
		
	
	
	
	
}


if(($_POST['email'])!=NULL)
{
	$email=$_POST['email'];
	
		
	
			$query1="UPDATE info SET email='$email' where 1;";
	mysql_query($query1) ;
		
	
	
	
}

if($_POST['add']!=NULL)
{
	$add=$_POST['add'];
	$_SESSION['add']=$add;
	include 'location.php';
	$query1="UPDATE info SET address='$add' where 1;";
	mysql_query($query1) or die("not updated1");
	mysql_select_db('main');
	$ulat=$_SESSION['ulat'];
	$ulong=$_SESSION['ulong'];
	$query1="UPDATE local SET latitude='$ulat', longitude='$ulong' where username='$u';";
	mysql_query($query1) ;
	
}


header("location:profile1.php");








