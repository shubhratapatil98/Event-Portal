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

  
$code=10001;
$college_name="vjti";
$comm = $_POST['comm'];



$comm = mysql_real_escape_string($comm);
$code= mysql_real_escape_string($code);
$college_name = mysql_real_escape_string($college_name);



 $query = "
INSERT INTO `online_event_portal`.`comment`(`code`,`college_name`,`comm`)VALUES('$code','$college_name','$comm');";

  mysql_query($query);
$_SESSION['member_id'] = $user['member_id'];
header('location:vjti_techno.html');
  

  mysql_close($con);
}
?>