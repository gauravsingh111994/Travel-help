
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


include 'menu1.html';

$id=$_GET['id'];
$type=$_GET['type'];
include 'password.php';
mysql_select_db('main');
$query="SElECT * from $type where id=$id;";
$fetch=mysql_query($query);
$row=mysql_fetch_assoc($fetch);
$exp=$row['experience'];
$date=$row['date'];



echo "<div class='spacer'></div>";
echo"<form action='upexp1.php?id=$id&type=$type' method='post'>";
echo "<input type='date' value='$date' name='date' ></textarea><br>";
echo "<input type='text' value='$exp' name='exp' style='width:500px;height:50px;'></textarea><br>";

echo "<input type='submit' name='submit'>";
echo "</form>";




?>
</body>
</html>
