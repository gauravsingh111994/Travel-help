
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
if($_SESSION['flag']==1)
	include 'menu1.html';

else
	include 'menu.html';?>

	<body class="light-bg home" >
	<div class="spacer"></div>
	<div class="spacer"></div>
	<form style="margin-left:30%;" action="session.php" method="post">

<input  style="width:500px;" name='search' placeholder='Where are you going?' type='text'>

<button class='btn btn-small btn-success search-query-btn'>
&#128269;
</button>
	</form>
	

	
	<div class="divider"></div>
	<h4 style="margin-left:2%">Related Question</h4>
	<div class="spacer"></div>




<?php



include 'password.php';
$question=$_POST['quest'];
$question=strtoupper($question);
$type=$_GET['type'];$chk=0;
if($type=="nearby")
{
	$type="local";
	$chk=1;
	
}
$search=$_SESSION['search'];
mysql_select_db("main");
$f=1;
$query="SELECT * from $type where place='$search';";

$run=mysql_query($query);
$tablename=$type."question";
while($row=mysql_fetch_assoc($run))
{
	
	$user=$row['username'];

	$id=$row['id'];
	mysql_select_db($user);
	$query="SELECT * from $tablename where place='$search'";
	$run1=mysql_query($query);
	while($row1=mysql_fetch_assoc($run1))
	{
		$squestion=strtoupper($row1['question']);
		
		
		similar_text($question, $squestion, $percent);
		if($percent>50)
		{echo "<a href='profile.php?id=$id&type=$type#tab3' style='margin-left:2%'>".$f.". ".$squestion."</a> (Asked to ".$row['username'].")<br>";$f++;}
			
			
		
		
	}
	
		
	
}
if($f==1)
echo "<p style='margin-left:2%'>No Related question</p>";
?>



<div class="divider"></div>
<h4 style="margin-left:2%">Your Question</h4>
<div class='spacer'></div>
<h5 style="margin-left:2%;font-size:16px;">Q. <?php echo $_POST['quest'];?><br></h5>
	<?php echo"<a class='button red'  href='postquestion.php?question=$question&type=$type' style='margin-left:2%;'>"."Post"."</a>";?>
 </body>
 </html>

