
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
$_SESSION['url']=$_SERVER['REQUEST_URI'];
include 'password.php';





	
	include 'menu1.html';

	
	
	




$u=$_SESSION['u'];
mysql_select_db($u);
$query="SELECT * from info;";
$fetch=mysql_query($query) or die("sorry");
$row=mysql_fetch_assoc($fetch) or die("sorry");



if(!glob("$u/*.*"))
$files=null;
else
$files = glob("$u/*.*");
	$num = $files[0];
	
	
	echo "<div class='column-container'>";
echo "<div class='column-one-fourth'>";


if(!$num)
	echo"<img src=noprofile-pic.jpg style='width:300;height:250px;'></img>";
else
echo '<img src="'.$num.'" alt="random image" style="width:300px;height:250px;">';
echo "<div class='spacer'></div>";
echo "<a href='ubi.php' style='margin-left:2%'>"."Edit basic information"."</a>";
echo "</div>";
	echo "<div class='column-three-qtr'>";
	echo $row['name']."<br>".$row['phone']."<br>".$row['email']."<br>".$row['place']."<br>"."Question answered/Question asked-".$row['qa']."/".$row['q']."<br>";

echo "</div>";

echo "<div class='column-one-fourth'></div>";	echo "<div class='column-one-fourth'></div>";

echo "</div>";

echo "<div class='divider'>"."</div>";	
	
	
		

	echo "<div class='column-container'>";
	echo "<div class='column-three-qtr'>";

		echo "<h3 style='margin-left:1%;font-size:20px;'>"."Places Visited"."</h3>";echo "</div>";
		echo "<div class='column-one-fourth'>";
		
		
		echo"<a href='apv.php?type=visited' style='font-size:14px;'>"."Add a visited place"."</a>";echo "</div>";	echo "<div class='column-one-fourth'></div>";	echo "<div class='column-one-fourth'></div>";echo "</div>";
	mysql_select_db('main');
	$query="SELECT DISTINCT place from visited where username='$u'";
	$fetch=mysql_query($query);
	
	
	while($row=mysql_fetch_assoc($fetch))
		{$place=$row['place'];
		echo "<a href='iprofile.php?place=$place&type=visited' style='margin-left:2%'>".$row['place']."</a>"."<br>";}	

	
	echo "<div class='divider'></div>";
	echo "<div class='column-container'>";
	echo "<div class='column-three-qtr'>";

		echo "<h3 style='margin-left:1%;font-size:20px;'>"."Places of residence"."</h3>";echo "</div>";
		echo "<div class='column-one-fourth'>";
		
		
		echo"<a href='apv.php?type=local' style='font-size:14px;' >"."Add a place of residence"."</a>";echo "</div>";	echo "<div class='column-one-fourth'></div>";	echo "<div class='column-one-fourth'></div>";echo "</div>";
	
	$query="SELECT DISTINCT place from local where username='$u'";
		$fetch=mysql_query($query);
	
	
	
		while($row=mysql_fetch_assoc($fetch))
		{$place=$row['place'];
	echo "<a href='iprofile.php?place=$place&type=local' style='margin-left:2%'>".$row['place']."</a>"."<br>";	
	
		}
	
	
	echo "<div class='spacer'></div>";
	echo "<div class='spacer'></div>";
	echo "<div class='spacer'></div>";	
	
	
