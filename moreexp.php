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


	<body class="light-bg home" >
<?php


session_start();
include 'password.php';

if($_SESSION['flag']==1)
	include 'menu1.html';

else
	include 'menu.html';


$type=$_GET['type'];
$user=$_GET['user'];
$place=$_GET['place'];

$typer=$type."review";
mysql_select_db($user);

$query="SELECT * from recommended where city='$place'  ";
$run=mysql_query($query);
echo "<div class='spacer'></div>";
echo "<div class='spacer'></div>";


echo "<ul class='tabs'>";
						echo "<li><a href='#tab1'>Recommended Places</a></li>";
						
						
						echo "<li><a href='#tab2'>Food Joints</a></li>";
						echo"<li><a href='#tab3'>Shopping</a></li>";
						echo"<li><a href='#tab4'>Knows About</a></li>";
					echo "</ul>";




echo "<div id='tab1' class='tabs-content'>";


  echo "<h4 style='margin-left:10px;'>Recommended Places</h4>";
  $count=1;
  while($row=mysql_fetch_assoc($run))
  {
	  
	 
 echo "<div class='accordion open'>";
 echo"<div class='accordion-content'>";

 echo"<h6 style='font-size:18px;'>". $count.". <u><b>".$row['place']."</b></u></h6><br>" ;
$dest=$row['place'];

 echo "<a target='_blank' href='http://www.tripadvisor.com/$dest%20$place'><img src='tripadvisor.jpg' style='margin-top:-30px;width:80px;height:80px;'></img></a>";

  echo "<a target='_blank' href='https://www.google.co.in/maps/place/$dest%20$place'><img src='greview.png' style='margin-top:-45px;width:50px;height:50px'></img></a>";
 



 echo "</div>";
 echo "</div>";
$count++;

  }
  
  $query="SELECT * from food where city='$place' ";
$run=mysql_query($query);





echo "</div>";


echo "<div id='tab2' class='tabs-content'>";

  echo "<h4 style='margin-left:10px;'>Food Joints</h4>";
  $count=1;
  while($row=mysql_fetch_assoc($run))
  {
	  
	 
 echo "<div class='accordion open'>";
 echo"<div class='accordion-content'>";

 echo"<h6 style='font-size:18px;'>". $count.". <u><b>".$row['place']."</b></u> </h6><br>" ;
$dest=$row['place'];
 echo "<a target='_blank' href='http://www.tripadvisor.com/$dest%20$place'><img src='tripadvisor.jpg' style='margin-top:-30px;width:80px;height:80px;'></img></a>";
 
  echo "<a target='_blank' href='https://www.google.co.in/maps/place/$dest%20$place'><img src='greview.png' style='margin-top:-45px;width:50px;height:50px'></img></a>";
 


 

 echo "</div>";
 echo "</div>";
$count++;

  }
  
  $query="SELECT * from shopping where city='$place' ";
$run=mysql_query($query);







echo "</div>";

echo "<div id='tab3' class='tabs-content'>";
  echo "<h4 style='margin-left:10px;'>Shopping</h4>";
  $count=1;
  while($row=mysql_fetch_assoc($run))
  {
	  
	$dest=$row['place']; 
 echo "<div class='accordion open'>";
 echo"<div class='accordion-content'>";

 echo"<h6 style='font-size:18px;'>". $count.". <u><b>".$row['place']."</b></u> </h6><br>" ;

 echo "<a target='_blank' href='http://www.tripadvisor.com/$dest%20$place'><img src='tripadvisor.jpg' style='margin-top:-30px;width:80px;height:80px;'></img></a>";

 echo "<a target='_blank' href='https://www.google.co.in/maps/place/$dest%20$place'><img src='greview.png' style='margin-top:-45px;width:50px;height:50px'></img></a>";
 

 

 echo "</div>";
 echo "</div>";
 echo "</div>";
$count++;

  }
  
  
?>



</body>
</html>