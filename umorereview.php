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
include 'menu1.html';
include 'password.php';

$user=$_GET['user'];
$place=$_GET['place'];
$type=$_GET['type'];
mysql_select_db($user);



echo "<form action='umorereview1.php?place=$place&user=$user&type=recommended' method=post>";



echo "<div class='divider'></div>";

echo"<h3>More review</h3>";

echo "<h6>Recommended Places</h6>";
echo "<input type='text' name='rec'    style='width:400px'><input type='submit' value='Add'></form>";
echo "<form action='umorereview1.php?place=$place&user=$user&type=shopping' method=post>";
echo "<h6>Shopping Joints</h6>";
echo "<input type='text' name='shop'   style='width:400px'></textarea><input type='submit' value='Add'></form>";
echo "<form action='umorereview1.php?place=$place&user=$user&type=food' method=post>";
echo"<h6>Food Joints</h6>";
echo "<input type='text' name='food'  style='width:400px'></textarea><input type='submit' value='Add'></form><br><br>";


echo"<a class='button red' href='iprofile.php?place=$place&type=$type' style='margin-left:20px;'> Done </a>";

?>

</form>
<div class='spacer'></div><div class='spacer'></div>