<?php


session_start();

include 'password.php';
$u=$_SESSION['u'];

echo $u;
mysql_select_db('main');
$type=$_SESSION['type'];

$place=strtoupper($_POST['place']);
$exp=$_POST['exp'];
$date=$_POST['date'];


$query="INSERT into $type(username,place,experience,date) VALUES('$u','$place','$exp','$date')";


mysql_query($query) or die("not inserted");

if($type=='local')
{
	mysql_select_db($u);
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
	
	$f=$_POST['f'];
	if($f=='1')
	{
		
		$query="UPDATE info SET place='$place' where 1";
		mysql_query($query);
		
		
		
	}
		

		
	
}






$path="/$u/$place/";

mkdir("$u/$place",0700);


$target_dir ="/$u/$place/";;
$x=1;


$target_file = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


	
    $check = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
    if($check !== false) {
        
        $uploadOk = 1;
		$file_name=$_FILES["fileToUpload1"]["name"];

		
		$add="$u/$place/$file_name";
		move_uploaded_file ($_FILES["fileToUpload1"]["tmp_name"], $add);

		
		
		
	}
	

	$url=$_SESSION['url'];
	header("location:umorereview.php?user=$u&place=$place&type=$type");

?>


