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
<?php
include 'menu1.html';
session_start();

$type=$_GET['type'];
$_SESSION['type']=$type;

?>

<body class="light-bg home">
<?php


if($type=="local")
echo"<h3>"."Add a place of residence"."</h3>";	

else
echo"<h3>"."Add a visited place"."</h3>";





?>
<div class="divider"></div>
<div class="column-container">

<div class="column-one-fourth">
<h6>Add your place</h6>
</div>
<div class="column-one-fourth">
<h6>Add your date of stay</h6></div><div class="column-three-qtr"></div></div><br>


<div class="column-container">

<form action="uploadapv.php" method="post" enctype="multipart/form-data">
<div class="column-one-fourth">
<input type='text' name="place" placeholder="Place">
</div>
<div class="column-one-fourth">
<input type='date' name="date" placeholder='Date'></div>
<br></div>
<h6>Address</h6>
	<textarea type="text" name="add" style="width:400px"></textarea>
<h6>Add your experience</h6>
<textarea type="text" name="exp" placeholder="Experience" style="width:400px"></textarea><br>


<?php


if($type=="local")
{	echo "Is this your current residence? <br>";
	echo "<input type='radio' name='f' value='1'>Yes<br>";
echo "<input type='radio' name='f' value='0' checked>No<br>"; }
	

?>








<h6>Upload images</h6>



    <input type="file" name="fileToUpload1" id="fileToUpload1">
	<br>
	&nbsp;&nbsp; &nbsp;&nbsp;<input type="submit" name="submit" >
	</form>

	
	  
	
	


<div class='spacer'></div><div class='spacer'></div>
</body>
</html>