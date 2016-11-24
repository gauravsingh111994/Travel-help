<head>
<title>Update</title>
<script type="text/javascript">
if(screen.width<800 )
	window.location="mobupdate.php";
	</script>

<style>
section{
	width: 80%;
	
	float: left;
	margin-left: 10%;
	padding: 20px;
	background-color: white;

	background-size: cover;
	
}
body
{
background-color: #4D739A;
}
</style>
</head>

<body>
<?php
session_start();
include 'menu.html';
$x=$_SESSION['x'];
$dataa=$_SESSION['dataa'];
$name=$_SESSION['name'];
$dbhost = 'localhost';
$dbuser = 'root';
$pass = '';

$conn =mysql_connect($dbhost,$dbuser,$pass) or die("Error: Please Sign in again");

mysql_select_db($dataa) or die('no such database');
$query1="SHOW TABLES FROM $dataa;";

$fetch1=$fetch1=mysql_query($query1) or die("try again");


for($y=0;$y<$x;$y++)
{
	
	
	echo "<h1><u>".$name[$y]."</u></h1>";

echo '<form action="up.php" method="POST"> ';

echo "<h3>Type</h2>";
echo '<input type="text" name="type[]">';
echo "<h3>Amount</h2>";
echo '<input type="text" name="amount[]">';

}

$_SESSION['x']=$x;
$_SESSION['dataa']=$dataa;
$_SESSION['name']=$name;


?>
<br><br>
<input type="submit" name="sub">
</form>
</body>

