<?php



include 'password.php';


mysql_select_db("11");

$query="Select * from 0491name where 1";
$count=0;
$run=mysql_query($query);
while($row=mysql_fetch_assoc($run))
{
	$name=$row['NAME'];
	$name=strtolower($name);
		$name=str_replace("\r\n",'',$name);

	$names=explode(" ",$name);
	$name=str_replace(' ','',$name);
	
	$name=$name."@maitlive.com";
	if($count==0)
	{$password=$names[0]."123";$count++;}
	else if($count==1)
	{if(!isset($names[1]))
		$names[1]=$names[0];
		$password=$names[1]."123";$count++;}
elseif($count==2)
{$password=$names[0]."1995";$count++;}
else if($count==3)
{
	if(!isset($names[1]))
		$names[1]=$names[0];
	$password=$names[1]."1995";$count++;}
else
{$password=$names[0]."1996";$count=0;}
		
	mysql_select_db("11");	
$query="INSERT into aayush (name, password) VALUES ('$name', '$password')";
mysql_query($query);
		
		
	
	
	

}
?>
