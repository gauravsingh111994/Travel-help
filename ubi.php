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
include 'menu1.html'
?>
	<body class="light-bg home">
		
			<div class="spacer"></div>

<h3 style="margin-left:2%;">Update Profile Information</h3>
<div class='divider'></div>


<form action="updateubi.php" method="post" enctype="multipart/form-data" style="margin-left:2%;">

	<div class="column-container">
	<div class="column-one-fourth">
   <h4 style="margin-left:2%;">Profile Picture</h4>
    <input type="file" name="fileToUpload" id="fileToUpload"></div>
  
<div class="column-one-fourth">
	<h4>NAME</h4>
	<input type="text" name="name"></div>
	<div class="column-one-fourth">
	  
		<h4>Phone Number</h4>
		
	<input type="text" name="phone"></div>
	<div class="column-one-fourth">
	</div></div>
	
	<div class="column-container">
	<div class="column-one-fourth">
	<h4>Email-id</h4>
	<input type="text" name="email"></div>
	<div class="column-one-fourth">
	<h4>Date Of Birth</h4>
	<input type="date" name="dob"></div>
	<div class="column-one-fourth">
	<h4>Profession</h4>
	<select name="profession">
	<option value="Other">--Select--</option>

<option value="Conventional Traveler">Conventional Traveler</option>
<option value="Journalist">Journalist</option>
<option value="Law">Law</option>
<option value="Defence Personnel">Defence Personnel</option>
<option value="Entrepreneur">Entrepreneur</option>
<option value="Public Servant">Public Servant</option>
<option value="Agriculture">Agriculture</option>
<option value="Government Servant">Government Servant</option>
<option value="Writer">Writer</option>
<option value="Artist">Artist</option>
<option value="Chartered Accountant">Chartered Accountant</option>
<option value="Banking">Banking</option>
<option value="Teachers / Professors">Teachers / Professors</option>
<option value="Doctors">Doctors</option>
<option value="Nurse">Nurse</option>
<option value="Businessman">Businessman</option>
<option value="Architect">Architect</option>
<option value="Driver">Driver</option>
<option value="Scientist">Scientist</option>
<option value="Student">Student</option>
<option value="Researcher">Researcher</option>
<option value="Sportsman">Sportsman</option>
<option value="Housewife">Housewife</option>
<option value="Engineering Services">Engineering Services</option>

</select></div>
	<h4></h4>


	<br>
	    <input type="submit"  name="submit" >
</form>




</body>
</html>
