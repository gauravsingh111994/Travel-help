<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8"  >

<title>Home</title>
<style>

body{
	
	background-image:url(banglore.jpg);
	background-size:cover;
}


section {
 
width : 100%;
  padding: 0 30px 30px 30px;
  margin-top: 175px;
margin-left:35%;
  text-align: left;
  border-radius: 5px;
 
}
input
{
	
	width:300px;
	
}
</style>


<link href='netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
<link href="dv8ioedqdle5b.cloudfront.net/stylesheets/redesign/bootstrap/bootstrap517a.css?1-274351037292224112598826254014850720673" media="screen" rel="stylesheet" type="text/css" />
<link href="dv8ioedqdle5b.cloudfront.net/stylesheets/redesign/shared/all0828.css?1-130599337175813437792653942315707036225" media="screen" rel="stylesheet" type="text/css" />

<link href="dv8ioedqdle5b.cloudfront.net/stylesheets/redesign/pages/home8f04.css?1-38351546474574852915108289463266667935" media="screen" rel="stylesheet" type="text/css" />


</head>

<body class='pages home en concierge-redesign'>

<?php
session_start();




$flag=isset($_SESSION['flag'])?$_SESSION['flag']:0;
$_SESSION['flag']=$flag;

if(!$_SESSION['flag'])
{
include 'menu.html';
}
else
{include 'menu1.html';include 'notification.php';


}
$_SESSION['url']=$_SERVER['REQUEST_URI'];
?>


<div class='overlay'></div>
<div class='cover'>
<div class='container'>
<h1 class='home-header'>
Travel help
</h1>

<h2>
Discover and connect with people who can help
</h2>
<form accept-charset="UTF-8" action="session.php" class="form-inline floating" method="post">
<div class='inputs'>
<div class='fancy-input search-query'>
<input class='search-query-input' name='search' placeholder='Where are you going?' type='text'>
</div>
<button class='btn btn-small btn-success search-query-btn'>
&#128269;

</button>
</div>
</div>
</div>

</form>
</body>
</html>