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


echo "<div class='spacer'></div>";
$url=$_GET['url'];
echo "<h3 style='margin-left:40%'>"."Image"."</h3>";
if($_SESSION['flag']==1)
echo "<a class='button red' href='deleteimage.php>url=$url'>Delete Image</a>";

echo "<div class='divider'></div>";



echo "<div class='spacer'></div>";
echo "<img src='$url' style='width:800px;height:800px; margin-left:20%'>";



?>


</body>
</html>


