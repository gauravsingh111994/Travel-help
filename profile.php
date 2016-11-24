
<html>

<head>

<link href="css/styles.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href='netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
<link href="dv8ioedqdle5b.cloudfront.net/stylesheets/redesign/bootstrap/bootstrap517a.css?1-274351037292224112598826254014850720673" media="screen" rel="stylesheet" type="text/css" />
<link href="dv8ioedqdle5b.cloudfront.net/stylesheets/redesign/shared/all0828.css?1-130599337175813437792653942315707036225" media="screen" rel="stylesheet" type="text/css" />
<link href="dv8ioedqdle5b.cloudfront.net/stylesheets/redesign/pages/home8f04.css?1-38351546474574852915108289463266667935" media="screen" rel="stylesheet" type="text/css" />
<style>

h3{
	
	font-size:20px;
}



</style>
<script type="text/javascript" src="js/common.js"></script>
	<script type="text/javascript" src="js/common.js"></script>
	<script type="text/javascript" src="js/jquery.carousel-content.min.js"></script>
		<script type="text/javascript" src="js/carousel-clients-settings.js"></script>
		
</head>


	<body class="light-bg home" >

<div class="main-container">


<?php

session_start();
$_SESSION['url']=$_SERVER['REQUEST_URI'];
$dbhost = 'localhost';
$dbuser = 'root';
$pass = '';
$connect = mysql_connect($dbhost,$dbuser,$pass) or die('no database');




$id1=$_GET['id'];
$type=$_GET['type'];


if($_SESSION['flag']==1)
{
	include 'menu1.html';

	

}

else
{
	
	include 'menu.html';

	
	
	
}


echo "<div class='spacer'></div>";

mysql_select_db('main');
$query="SELECT * from $type where id=$id1;";
$fetch=mysql_query($query) or die("sorry");
$row=mysql_fetch_assoc($fetch) or die("sorry");


$username=$row['username'];
$_SESSION['username']=$username;
if(!glob("$username/*.*"))
$files=null;
else
$files = glob("$username/*.*");
	$num = $files[0];

mysql_select_db($username);
$query="SELECT * from info";
$run=mysql_query($query);
$row1=mysql_fetch_assoc($run);
echo "<div class='column-container'>";
echo "<div class='column-one-fourth'>";
if(!$num)
	echo"<img src=noprofile-pic.jpg style='width:300;height:250px;'></img>";
else
echo '<img src="'.$num.'" alt="random image" style="width:200px;height:200px;">';
echo "</div>";
echo "<div class='column-three-qtr'>";
if($type=="local")
{echo$row1['name']."<br><br>"."Rating - ".$row1['rating']."/5.0";
	if($_SESSION['flag']==1)
	include 'rating.php';

echo "<br>Question answered/Question asked :".$row1['qa']."/".$row1['q']."<br>";
if($row1['qa']>10 && $row1['qa']<=20)
	echo "Level 2 user<br>";
else if($row1['qa']>20)
	echo "Level 3 user<br>";
else 
	echo "Level 1 user <br>";
echo $row1['name']." is staying in this place since : ".$row['date'];}
else if($type="visited")
{echo$row1['name']."<br><br>"."Rating - ".$row1['rating']."/5.0";

if($_SESSION['flag']==1)
	include 'rating.php';
echo "<br>Question answered/Question asked :".$row1['qa']."/".$row1['q']."<br>";

if($row1['qa']>10 && $row1['qa']<=20)
	echo "Level 2 user<br>";
else if($row1['qa']>20)
	echo "Level 3 user<br>";
else 
	echo "Level 1 user <br>";
echo $row1['name']." has visited this place on : ".$row['date'];



}
	echo "</div>";
	echo "<div class='column-one-fourth'>";
		echo "</div>";
			echo "<div class='column-one-fourth'>";
			echo "</div>";
	echo "</div>";
$place=$row['place'];
echo "<div class='spacer'></div>";
echo "<ul class='tabs'>";
						echo "<li><a href='#tab1'>Experience</a></li>";
						
						
						echo "<li><a href='#tab2'>Images</a></li>";
						echo"<li><a href='#tab3'>Questions Asked</a></li>";
						echo"<li><a href='#tab4'>Knows About</a></li>";
					echo "</ul>";
					
					echo "<div id='tab1' class='tabs-content'>";
echo "<h3>"."Experience about ".$row['place']."</h3>";

echo "<p style='margin-right:148px;margin-bottom:-10px;'>".$row['experience'];

echo "<div class='spacer'></div>";
echo "<a href='moreexp.php?user=$username&place=$place&type=$type' style='font-size:14px;'>"."See more "."</a></p>";
echo "</div>";
echo "<div id='tab2' class='tabs-content'>";
	echo "<h3>"."Images captured by ".$row1['name']."</h3>";
	echo "<div class='spacer'></div>";
	
$files = glob("$username/$place/*.*");
for ($i=0; $i<count($files); $i++)
{
	$num = $files[$i];
	echo "<a href='largeimage.php?url=$num'>".'<img src="'.$num.'" alt="random image" style="width:110px;height:110px;">'."&nbsp;&nbsp"."</a>";
	}
	
echo "<div class='spacer'></div>";
	
	
echo "<a href='images.php?user=$username&place=$place' style='font-size:14px;'>"."Click here to see all images captured by ".$row1['name']."</a>";


echo "</div>";

echo "<div id='tab3' class='tabs-content'>";


if($_SESSION['flag']==1)
{
	
		echo "<form style='margin-left:20%;' action='uquestion.php?id=$id1&amp;type=$type' method='post'>";
	echo "<input type='text' style='width:500px;' placeholder='Add a question' name='question'>";
	echo "<input type='submit' style='background-color:skyblue;' name='submit'>";
	echo "</form>";
	
}
else
	echo "<h4 style='margin-left:10%;color:black;font-size:16px;'>"."For asking question please sign in/sign up to post a question"."</h4>";



echo "<h3>"."Questions Asked"."</h3>";



$place=$row['place'];
$tableq=$type."question";
$tablec=$type."comment";
$query="SELECT *from $tableq  where place='$place' ORDER BY id DESC;";
$fetch=mysql_query($query);	echo"<div class='accordion-container'>";
if(mysql_num_rows($fetch)==0)
	echo "No Question Asked";
while($row=mysql_fetch_assoc($fetch))
{	$id=$row['id'];echo"<div class='accordion closed'>";
	echo $row['user']."<br>"."<h4 style='font-size:16px;'><b>Q: ".$row['question']."</b><br>"."</h4>";

	
		

		
		$u=isset($_SESSION['u'])?$_SESSION['u']:"no";
	if($row['user']==$u)
		{echo "<a href='upquestion.php?idq=$id&id=$id1&type=$type' style='font-size:12px;'>Edit question</a> ";echo "/";
		echo "<a href='delquestion.php?idq=$id&id=$id1&type=$type' style='font-size:12px;'>Delete question</a>";}
		
		if($username==$u)
			echo "<a href='delquestion.php?idq=$id&id=$id1&type=$type' style='font-size:12px;'>Delete question</a>";
		
		echo "<br>";
	if(!$row['answer'])
	{
		if($u==$username)
		{
			$_SESSION['idq']=$id;
			$_SESSION['id']=$id1;
			$_SESSION['type']=$type;
			echo "<form action='uanswer.php' method='post'>";
			echo "<input type='text' name='answer' placeholder='Add an answer'>";
			echo "<input type='submit' name='submit'><br>";echo "</form>";
			
		}
		else
		echo "<i><h4 style='font-size:16px;'>"."No answer added<br>"."</h4></i>";}
	
	else
	{echo "<h4 style='font-size:16px;'>A: ".$row['answer']."</h4>";
		if($u==$username)
		{echo "<a href='upanswer.php?idq=$id&id=$id1&type=$type' style='font-size:12px;' >"."Edit answer"."</a>"."/";
                    
	echo "<a href='delanswer.php?idq=$id&id=$id1&type=$type' style='font-size:12px;'>"."Delete answer"."</a><br>";}}
echo "</div>";
	echo "<div class='accordion-content'>";
	
	$query1="select * from $tablec where id=$id;";
	$fetch1=mysql_query($query1) ;
	
	if(!$fetch &&$_SESSION['flag']==1)
	{
		echo "<form action='ucomment.php?id=$id1&type=$type&idq=$id' method='post'>";
	echo "<input type='text' placeholder='Add a reply' name='reply'>";
	echo "<input type='submit' style='background-color:skyblue;' name='submit'>";
	echo "</form>";
	die();
		
	}

	if($_SESSION['flag']==1)
	{
		echo "<form action='ucomment.php?id=$id1&type=$type&idq=$id' method='post'>";
	echo "<input type='text' placeholder='Add a reply' name='reply'>";
	echo "<input type='submit' name='submit'>";
	echo "</form>";}

	
	while($row1=mysql_fetch_assoc($fetch1))
	{$id=$row1['idc'];
		echo $row1['user']."<br>"."<h4 style='font-size:12px;'>".$row1['comment']."</h4>";
			if($row1['user']==$u)
		{echo "<a href='upcomment.php?idc=$id&id=$id1&type=$type' style='font-size:12px;'>Edit comment</a> ";echo "/";
		echo "<a href='delcomment.php?idc=$id&id=$id1&type=$type' style='font-size:12px;'>Delete comment</a><br>";}
		if($u==$username)
			echo "<a href='delcomment.php?idc=$id&id=$id1&type=$type' style='font-size:12px;'>Delete comment</a><br>";
			
	}
	
	
echo "</div>";


	
}

echo "</div>";echo "</div>";

echo "<div id='tab4' class='tabs-content'>";
$u=$_SESSION['username'];
echo "<h3>Knows About</h3>";
mysql_select_db("main");
$query="Select * from local where username='$u'";
$run=mysql_query($query);$count=1;
while($row=mysql_fetch_assoc($run))
{
	$id=$row['id'];
	echo "<a href=profile.php?id=$id&type=local style='margin-left:2%;'>".$count.". ".$row['place']."<br></a>";$count++;
	
	
}
$query="Select * from visited where username='$u'";
$run=mysql_query($query);
while($row=mysql_fetch_assoc($run))
{
	
	$id=$row['id'];
	echo "<a href=profile.php?id=$id&type=visited style='margin-left:2%;'>".$count.". ".$row['place']."</a>";$count++;
}echo "</div>";
?>
<div class="spacer"></div>
<div class="spacer"></div>
</div>
</div>
</body>
</html>