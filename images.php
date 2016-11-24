<html>

<head>

<link href="css/styles.css" rel="stylesheet">
		<link href="css/font-awesome.css" rel="stylesheet">
		<link href='netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
<link href="dv8ioedqdle5b.cloudfront.net/stylesheets/redesign/bootstrap/bootstrap517a.css?1-274351037292224112598826254014850720673" media="screen" rel="stylesheet" type="text/css" />
<link href="dv8ioedqdle5b.cloudfront.net/stylesheets/redesign/shared/all0828.css?1-130599337175813437792653942315707036225" media="screen" rel="stylesheet" type="text/css" />

<link href="dv8ioedqdle5b.cloudfront.net/stylesheets/redesign/pages/home8f04.css?1-38351546474574852915108289463266667935" media="screen" rel="stylesheet" type="text/css" />
<style>





</style>

</head>


	<body class="light-bg home">


<?php
session_start();

if($_SESSION['flag']==1)
	include 'menu1.html';
else
	include 'menu.html';

$user=$_GET['user'];
$place=$_GET['place'];
echo "<div class='spacer'></div>";
$u=$_SESSION['u'];


echo "<h3 style='margin-left:35%'>"."Images captured"."</h3>";
if($u==$user)
{
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	
	echo"<form action='upload.php?user=$user&place=$place' method='post' enctype='multipart/form-data'>";
    
    echo"<input type='file' name='fileToUpload'   id='fileToUpload'><br>";
    echo"<input type='submit' value='Upload Image' name='submit'>";
echo "</form>";
	
	
}

echo "<div class='divider'></div>";


$files = glob("$user/$place/*.*");
for ($i=0; $i<count($files); $i++)
{
	$num = $files[$i];
	echo "<a class='button red' href='largeimage.php?url=$num'>".'<img src="'.$num.'" alt="random image" style="width:300px;height:300px;">'."&nbsp;&nbsp"."</a>";
	}
	
	$_SESSION['url']=$_SERVER['REQUEST_URI'];
?>

</body>
</html>