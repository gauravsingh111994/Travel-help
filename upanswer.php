
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
$idq=$_GET['idq'];
$id=$_GET['id'];
$type=$_GET['type'];
include 'password.php';
mysql_select_db('main');
$query="SElECT * from $type where id=$id;";
$fetch=mysql_query($query);
$row=mysql_fetch_assoc($fetch);
$username=$row['username'];

$sdb=mysql_select_db($username) or die("no database");
$typo=$type."question";

$query="SELECT * from $typo where id=$idq";
$fetch=mysql_query($query) or die("query cant be executed");
$row=mysql_fetch_assoc($fetch);
echo "<div class='spacer'></div>";
echo"<form action='upanswer1.php?id=$id&idq=$idq&type=local' method='post'>";
$answer=$row['answer'];
echo "<input type='text' value='$answer' name='answer' style='width:500px;height:50px;'><br>";

echo "<input type='submit' name='submit'>";
echo "</form>";




?>
</body>
</html>
