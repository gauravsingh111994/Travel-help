<?php

include 'password.php';
mysql_select_db("11");
$query="Select * from aaysuh";
$run=mysql_query($query);

while($row=mysql_fetch_assoc($run))
{
	$name=$row['name'];$password=$row['password'];
	$name=str_replace("\r\n",'',$name);
	$password=str_replace("\r\n",'',$password);

	$query="INSERT into aayush (name, password) VALUES ('$name', '$password')";
mysql_query($query);
	
}

?>