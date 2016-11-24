<html>

<head>
<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1">
	<link href="css/styles.css" rel="stylesheet">
		<link href="css/font-awesome.css" rel="stylesheet">
		<link href='netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
<link href="dv8ioedqdle5b.cloudfront.net/stylesheets/redesign/bootstrap/bootstrap517a.css?1-274351037292224112598826254014850720673" media="screen" rel="stylesheet" type="text/css" />
<link href="dv8ioedqdle5b.cloudfront.net/stylesheets/redesign/shared/all0828.css?1-130599337175813437792653942315707036225" media="screen" rel="stylesheet" type="text/css" />

<link href="dv8ioedqdle5b.cloudfront.net/stylesheets/redesign/pages/home8f04.css?1-38351546474574852915108289463266667935" media="screen" rel="stylesheet" type="text/css" />

<style>

h2{
	
	
	
	font-size:30px;
}





</style>


</head>
<?php
session_start();
if($_SESSION['flag']==1)
{include 'menu1.html';include'notification.php';}

else
	include 'menu.html';

include 'password.php';
?>








	
<body class="light-bg">
		<div class="main-container">

		<div class='spacer'></div>

	<form style="margin-left:30%;" action="session.php" method="post">

<input  style="width:500px;" name='search' placeholder='Where are you going?' type='text'>

<button class='btn btn-small btn-success search-query-btn'>
&#128269;
</button>

</form>
<div class="spacer"></div>
<ul class='tabs'  style="margin-bottom:-70px;">
						<li><a href='#tab1'>Local People</a></li>
						
						<li><a href='#tab2'>Visited People</a></li>
						<li><a href='#' onclick="getLocation()">Nearby People</a></li>
						<li><a href='nearbyplaces.php' >Nearby Places</a></li>
						<p id="demo"></p>
						<script>


var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
	var lat=position.coords.latitude;
	var lon=position.coords.longitude;
	
   
	 window.location.href = "trace.php?width=" + lat + "&height=" + lon;
	
}




</script>
					</ul>

<div class='divider'></div>
<div id='tab1' class="sidespace">
<h3>Local People</h3>

	<?php
if($_SESSION['flag']==1)
{	
echo "<form style='margin-left:35%;' action='question.php?type=local' method='post'>";

echo "<input  style='width:300px;' name='quest' placeholder='Question for local people?' type='text'></input>";

echo "<input type='submit' value='Ask?' style='background-color:skyblue;'></input><br>";



echo "</form>";

}


?>
<?php

$_SESSION['url']=$_SERVER['REQUEST_URI'];

	$sear=$_SESSION['search'];
$selectdb=mysql_select_db('main') or die("nodatabase");
$query="SELECT * from local WHERE place='$sear' ORDER BY DATE ASC;";
$run=mysql_query($query) or die ("no local people found");$count=0;

if(!$run)
	echo "No local people found<br>";

while($row=mysql_fetch_assoc($run))
{$id=$row['id'];
$user=$row['username'];$files=null;
if(!glob("$user/*.*"))
	$file=null;
else
$files = glob("$user/*.*");
	$num = $files[0];
$date=$row['date'];
mysql_select_db($user);
$query="SELECT * from info";
$run1=mysql_query($query) or die("not executed");
while($row1=mysql_fetch_assoc($run1))
{

echo "<div class='column-container'>";

echo "<div class='column-one-fourth'>";
if(!$num)
echo "<a href='profile.php?id=$id&amp;type=local' style='font-size:14px;'>"."<img src=noprofile-pic.jpg style='width:300;height:200px;'></img>";
else
	echo "<a href='profile.php?id=$id&amp;type=local' style='font-size:14px;'>".'<img src="'.$num.'" alt="random image" style="width:300px;height:200px;"></img>';
echo "</div>";$count++;
echo "<div class='column-one-fourth'>";
	echo "<b><u>".$row1['name']."</u></b>"."<br><br>"."Rating - ".$row1['rating']."/5.0<br>";
	if($row1['qa']>10 && $row1['qa']<=20)
	echo "Level 2 user<br>";
else if($row1['qa']>20)
	echo "Level 3 user<br>";
else 
	echo "Level 1 user <br>";
	echo "Question answered/Question asked-".$row1['qa']."/".$row1['q']."<br>".$row1['name']." is staying in this place since : ".$date."</a>";
	
	echo "</div>";

if($count==2)
{
	echo "</div>";
	echo "<div class='spacer'></div>";
	$count=0;
}


	
	
}
	
}
if($count==1)
{
echo "<div class='column-one-fourth'>";
echo"</div>";echo "</div>";}
else echo "</div>";
echo "<div class='spacer'></div>";


echo "<div id=tab2>";

echo"<div class='divider'></div>";
echo "<h3>Visited People</h3>";
if($_SESSION['flag']==1)
{	
echo "<form style='margin-left:35%;' action='question.php?type=visited' method='post'>";

echo "<input  style='width:300px;' name='quest' placeholder='Question for visited people?' type='text'></input>";

echo "<input type='submit' value='Ask?' style='background-color:skyblue;'></input><br>";



echo "</form>";

}
mysql_select_db('main');
$query="SELECT * from visited WHERE place='$sear' ORDER BY DATE DESC;";
$count=0;
$run=mysql_query($query) or die ("no visiter to this place found found");$count=0;
while($row=mysql_fetch_assoc($run))
{$id=$row['id'];
$date=$row['date'];
$user=$row['username'];
if(!glob("$user/*.*"))
$files=null;
else
$files = glob("$user/*.*");
	$num = $files[0];
mysql_select_db($user);
$query="SELECT * from info";
$run1=mysql_query($query);
while($row1=mysql_fetch_assoc($run1))
{



echo "<div class='column-container'>";

echo "<div class='column-one-fourth'>";
if(!$num)
echo "<a href='profile.php?id=$id&amp;type=visited' style='font-size:14px;'>"."<img src=noprofile-pic.jpg style='width:300;height:200px;'></img>";
else
	echo "<a href='profile.php?id=$id&amp;type=visited' style='font-size:14px;'>".'<img src="'.$num.'" alt="random image" style="width:300px;height:200px;"></img>';
echo "</div>";
echo "<div class='column-one-fourth'>";
	echo "<b><u>".$row1['name']."</u></b>"."<br><br>"."Rating - ".$row1['rating']."/5.0<br>";
	if($row1['qa']>10 && $row1['qa']<=20)
	echo "Level 2 user<br>";
else if($row1['qa']>20)
	echo "Level 3 user<br>";
else 
	echo "Level 1 user <br>";
	echo "Question answered/Question asked-".$row1['qa']."/".$row1['q']."<br>".$row1['name']." has visited this place on :".$date."</a>";
	
	echo "</div>";
$count++;

if($count==2)
{
	echo "</div>";
	echo "<div class='spacer'></div>";
	
	$count=0;
	
	
	
}


	
	
	
	
	
	
	
	
}	
}
if($count==1)
{
echo "<div class='column-one-fourth'>";
echo"</div>";echo "</div>";}




?>

<div class='spacer'></div>
<div class='spacer'></div>
<div class='spacer'></div>
</div>
</body>

</html>


