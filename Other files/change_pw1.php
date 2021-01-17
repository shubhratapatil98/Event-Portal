<?php
if( $_POST )
{
define('DB_HOST', 'localhost');
define('DB_NAME', 'online_event_portal'); 
define('DB_USER','root');
define('DB_PASSWORD','');
 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 


  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("online_event_portal", $con);

  

$cpassword = $_POST['current_password'];
$npassword = $_POST['new_password'];





$cpassword = mysql_real_escape_string($cpassword);
$password = mysql_real_escape_string($npassword);



 $query = "
UPDATE  `online_event_portal`.`admin_login` SET `password`='$password' WHERE `password`='$cpassword';";

  mysql_query($query);
{
header('location:achange_password.html');
}
mysql_close($con);
}
?>