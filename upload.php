<?php
session_start();

$user=$_GET['user'];
$place=$_GET['place'];
$target_dir = "$user/$place/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
		$file_name=$_FILES["fileToUpload"]["name"];

	
	

		$add="$user/$place/$file_name";
		move_uploaded_file ($_FILES["fileToUpload"]["tmp_name"], $add);

		
		
		
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }



$url=$_SESSION['url'];
header("location:$url");
?>