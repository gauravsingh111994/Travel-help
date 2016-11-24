


<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/styles.css" rel="stylesheet">
		<link href="css/font-awesome.css" rel="stylesheet">
		<link href='netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
<link href="dv8ioedqdle5b.cloudfront.net/stylesheets/redesign/bootstrap/bootstrap517a.css?1-274351037292224112598826254014850720673" media="screen" rel="stylesheet" type="text/css" />
<link href="dv8ioedqdle5b.cloudfront.net/stylesheets/redesign/shared/all0828.css?1-130599337175813437792653942315707036225" media="screen" rel="stylesheet" type="text/css" />

<link href="dv8ioedqdle5b.cloudfront.net/stylesheets/redesign/pages/home8f04.css?1-38351546474574852915108289463266667935" media="screen" rel="stylesheet" type="text/css" />


</head>

<?php

session_start();
$_SESSION['url']=$_SERVER['REQUEST_URI'];
if($_SESSION['flag']==1)
	include 'menu1.html';

else
	include 'menu.html';?>

	<body class="light-bg home" >
	<div class="spacer"></div>
	<div class="spacer"></div>
	<ul class='tabs'  style="margin-bottom:-150px;">
						<li><a href='#tab1'>Recommended Places</a></li>
						
						<li><a href='#tab2'>Food Joints</a></li>
						<li><a href='#tab3'>Shopping Joints</a></li>
						
						</ul>
<?php



include 'password.php';
$place=$_SESSION['search'];
$ulat=$_SESSION['ulat'];
$ulong=$_SESSION['ulong'];



mysql_select_db("main");
$query="SELECT * from recommended where city='$place' ORDER BY  nou DESC ";
$run=mysql_query($query);







echo "<div id='tab1' class='tabs-content'>";


  echo "<h4 style='margin-left:10px;'>Recommended Places</h4>";
  $count=1;
  while($row=mysql_fetch_assoc($run))
  {
	  
	  $lat=$row['latitude'];
$long=$row['longitude'];
$dest=$row['place'];
  $theta = $ulong - $long;
  $dist = (sin(deg2rad($ulat)) * sin(deg2rad($lat))) + ( cos(deg2rad($ulat)) * cos(deg2rad($lat)) * cos(deg2rad($theta)));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $distance=round($miles * 1.609344,2);
 echo "<div class='accordion open'>";
 echo"<div class='accordion-content'>";

 echo"<h6>". $count.". <u><b>".$row['place']."</b></u> (".$distance." Km away)"."</h6>" ;
 echo "<p style='margin-left:1%;font-size:14px;margin-top:-10px;'>Recommended by ".$row['nou']." user</p>";
 echo "<a target='_blank' href='http://www.tripadvisor.com/$dest%20$place'><img src='tripadvisor.jpg' style='margin-top:-30px;width:80px;height:80px;'></img></a>";
 echo "<a target='_blank' href='https://www.google.co.in/maps/dir/$ulat+$ulong/$lat+$long'><img src='map.png' style='margin-top:-50px;width:50px;height:50px;margin-left:-15px'></img></a>";
  echo "<a target='_blank' href='https://www.google.co.in/maps/place/$dest%20$place'><img src='greview.png' style='margin-top:-45px;width:50px;height:50px'></img></a>";
 

 $_SESSION['lat']=$lat;
 $_SESSION['long']=$long;
 

 echo "</div>";
 echo "</div>";
$count++;

  }
  
  $query="SELECT * from food where city='$place' ORDER BY  nou DESC ";
$run=mysql_query($query);





echo "</div>";


echo "<div id='tab2' class='tabs-content'>";

  echo "<h4 style='margin-left:10px;'>Food Joints</h4>";
  $count=1;
  while($row=mysql_fetch_assoc($run))
  {
	  
	  $lat=$row['latitude'];
$long=$row['longitude'];
$dest=$row['place'];
  $theta = $ulong - $long;
  $dist = (sin(deg2rad($ulat)) * sin(deg2rad($lat))) + ( cos(deg2rad($ulat)) * cos(deg2rad($lat)) * cos(deg2rad($theta)));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $distance=round($miles * 1.609344,2);
 echo "<div class='accordion open'>";
 echo"<div class='accordion-content'>";

 echo"<h6>". $count.". <u><b>".$row['place']."</b></u> (".$distance." Km away)"."</h6>" ;
 echo "<p style='margin-left:1%;font-size:14px;margin-top:-10px;'>Recommended by ".$row['nou']." user</p>";
 echo "<a target='_blank' href='http://www.tripadvisor.com/$dest%20$place'><img src='tripadvisor.jpg' style='margin-top:-30px;width:80px;height:80px;'></img></a>";
 echo "<a target='_blank' href='https://www.google.co.in/maps/dir/$ulat+$ulong/$lat+$long'><img src='map.png' style='margin-top:-50px;width:50px;height:50px;margin-left:-15px'></img></a>";
  echo "<a target='_blank' href='https://www.google.co.in/maps/place/$dest%20$place'><img src='greview.png' style='margin-top:-45px;width:50px;height:50px'></img></a>";
 

 $_SESSION['lat']=$lat;
 $_SESSION['long']=$long;
 

 echo "</div>";
 echo "</div>";
$count++;

  }
  
  $query="SELECT * from shopping where city='$place' ORDER BY  nou DESC ";
$run=mysql_query($query);







echo "</div>";

echo "<div id='tab3' class='tabs-content'>";
  echo "<h4 style='margin-left:10px;'>Shopping</h4>";
  $count=1;
  while($row=mysql_fetch_assoc($run))
  {
	  
	  $lat=$row['latitude'];
$long=$row['longitude'];
$dest=$row['place'];
  $theta = $ulong - $long;
  $dist = (sin(deg2rad($ulat)) * sin(deg2rad($lat))) + ( cos(deg2rad($ulat)) * cos(deg2rad($lat)) * cos(deg2rad($theta)));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $distance=round($miles * 1.609344,2);
 echo "<div class='accordion open'>";
 echo"<div class='accordion-content'>";

 echo"<h6>". $count.". <u><b>".$row['place']."</b></u> (".$distance." Km away)"."</h6>" ;
 echo "<p style='margin-left:1%;font-size:14px;margin-top:-10px;'>Recommended by ".$row['nou']." user</p>";
 echo "<a target='_blank' href='http://www.tripadvisor.com/$dest%20$place'><img src='tripadvisor.jpg' style='margin-top:-30px;width:80px;height:80px;'></img></a>";
 echo "<a target='_blank' href='https://www.google.co.in/maps/dir/$ulat+$ulong/$lat+$long'><img src='map.png' style='margin-top:-50px;width:50px;height:50px;margin-left:-15px'></img></a>";
 echo "<a target='_blank' href='https://www.google.co.in/maps/place/$dest%20$place'><img src='greview.png' style='margin-top:-45px;width:50px;height:50px'></img></a>";
 

 $_SESSION['lat']=$lat;
 $_SESSION['long']=$long;
 

 echo "</div>";
 echo "</div>";
 echo "</div>";
$count++;

  }
  
  
?>



</body>
</html>