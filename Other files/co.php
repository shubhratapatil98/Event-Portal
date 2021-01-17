<?php
$username= $_POST['username'];
$password= $_POST['password'];

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

mysql_connect("localhost","root","");
mysql_select_db("online_event_portal");

$result=mysql_query("select *from `co-ordinator` where username = '$username' and password = '$password' ")
or die(mysql_error());

$row = mysql_fetch_array($result);

if($row['username'] == $username && $row['password'] == $password)
{
echo "login success.....".$row['username'];
$_SESSION['member_id'] = $user['member_id'];
header('location:addevent.php');
}
else
{
echo "failed";
}
?>