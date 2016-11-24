<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.1.min.js"></script>
<script src="f_clone_Notify.js" type="text/javascript"></script>
<link href="f_clone_Notify.css" rel="stylesheet" />
</head>

<body>
<?php  
include 'password.php';

$u=$_SESSION['u'];
mysql_select_db($u);
$query="SELECT * from notification where flag='1';";
$run=mysql_query($query);$flag=0;$not='';
if(mysql_num_rows($run)>0)
{
while($row=mysql_fetch_assoc($run))
$not=$not.$row['noti']."<br>";

$query="UPDATE notification SET flag='0' where flag='1'";
mysql_query($query);

}

else
{$flag=1;}	



?>
<script type='text/javascript'>
var flag='<?php echo $flag;?>';
if(flag==0)
{
	var not='<?php echo $not;?>';
       sNotify.addToQueue(not);
sNotify.alterNotifications('chat_msg');}
</script>


</body>
</html>
