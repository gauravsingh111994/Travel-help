
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




$place=$_GET['place'];
$type=$_GET['type'];
$u=$_SESSION['u'];
$typeq=$type."question";

mysql_select_db('main') or die("no database");
$query="SELECT * from $type WHERE place='$place' AND username='$u'";
$fetch=mysql_query($query) or die("sorry");
$row=mysql_fetch_assoc($fetch) or die("sorry");
$date=$row['date'];
$id=$row['id'];
mysql_select_db($u);


	include 'menu1.html';

	echo "<div class='spacer'></div>";
	
	echo "<div class='column-container'>";
	echo "<div class='column-three-qtr'>";
	
	echo "<h3 style='margin-left:1%;font-size:20px;margin-bottom:-10px;'>"."Experience about ".$place."</h3>";echo"</div>";
echo "</div>";
echo "<div class='column-one-fourth'>";
echo "<a href='uexp.php?id=$id&type=$type'>"."Edit Experience"."</a>";
echo"</div>";

echo "</div>";
echo "<br>";
echo "<div class='divider'></div>";
echo "<br>";




$query1="SELECT * from info";
$fetch1=mysql_query($query1);
$row1=mysql_fetch_assoc($fetch1);
echo "<span style='margin-left:1%;font-size:20px;'>Your date of visit : $date</span>";
echo "<div class='spacer'></div>";
echo "<p style='margin-left:1%;font-size:20px;margin-right:150px;margin-bottom:-10px;'>".$row['experience'];
$username=$row['username'];
echo "<a href='moreexp.php?user=$username&place=$place&type=$type' style='font-size:14px;'>"."<br><br>See more "."</a></p>";
echo "<div class='divider'></div>";
	echo "<h3 style='margin-left:0.5%;font-size:20px;'>"."Images captured by ".$row1['name']."</h3>";
	echo "<div class='spacer'></div>";
$files = glob("$u/$place/*.*");echo "<span style='margin-left:1%;'>";
for ($i=0; $i<count($files); $i++)
{
	$num = $files[$i];
	echo "<a href='largeimage.php?url=$num' '>".'<img src="'.$num.'" alt="random image" style="width:110px;height:110px;">'."&nbsp;&nbsp"."</a>";
	}
	echo "</span>";
echo "<div class='spacer'></div>";
	
	echo "<a href='images.php?user=$u&place=$place' style='margin-left:1%;'>"."Click here to see all images/Upload images"."</a>";
	
	

	
	echo "<div class='divider'></div>";
	echo "<h3 style='margin-left:0.5%'>"."Question asked"."</h3>";
	$query="SELECT * from $typeq where place='$place' ORDER by id DESC";
	$fetch=mysql_query($query);
	$typec=$type."comment";
	echo"<div class='accordion-container'>";
	while($row=mysql_fetch_assoc($fetch))
	{
		echo"<div class='accordion closed'>";
		$idq=$row['id'];
		echo "Q : ".$row['question']." <a href='delquestion.php?id=$id&idq=$idq&type=$type'>"." &nbsp;&nbsp;&nbsp;Delete Question"."</a><br>";
		echo "<br>";
		if(!$row['answer'])
		{
			
			$_SESSION['idq']=$idq;
			$_SESSION['id']=$id;
			$_SESSION['type']=$type;
			echo "<form action='uanswer.php' method='post'>";
			echo "<input type='text' name='answer' placeholder='Add an answer'>";
			echo "<input type='submit' name='submit'><br>";echo "</form>";
		}
	
	else
	{echo "A : ".$row['answer']." <a href='upanswer.php?idq=$idq&id=$id&type=$type' >"."Edit answer"."</a>"."/";
                    
					echo "<a href='delanswer.php?idq=$idq&id=$id&type=$type'>"."Delete answer"."</a><br>";
					
					
					}
		echo "</div>";
		$query1="SELECT * from $typec where id='$idq'";
		$fetch1=mysql_query($query1) or die("no query");
		echo "<div class='accordion-content'>";
			echo "<form action='ucomment.php?id=$id&type=$type&idq=$idq' method='post'>";
	echo "<input type='text' placeholder='Add a reply' name='reply'>";
	echo "<input type='submit' name='submit'>";
	echo "</form>";echo "</div>";
		while($row1=mysql_fetch_assoc($fetch1))
		{
	
	echo "<div class='accordion-content'>";
	
			$idc=$row1['idc'];
			$user=$row1['user'];
			echo $user."<br>";
			echo $row1['comment'];
			echo "<br>";
			if($user==$u)
				{echo " <a href='upcomment.php?idc=$idc&id=$id&type=$type' style='font-size:12px;'>Edit comment</a> ";echo "/";
		echo "<a href='delcomment.php?idc=$idc&id=$id&type=$type' style='font-size:12px;'>Delete comment</a><br>";}	
		
		else
			echo "<a href='delcomment.php?idc=$idc&id=$id&type=$type' style='font-size:12px;'>Delete comment</a><br>";
			
			echo "</div>";
		}
		
		echo "</div>";
	}

	echo "</div>";
	$_SESSION['url']=$_SERVER['REQUEST_URI'];
?>


</body>
</html>