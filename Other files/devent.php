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

  


$event_id = $_POST['eid'];

$institute_code = $_POST['icode'];



$event_id = mysql_real_escape_string($event_id);

$institute_code = mysql_real_escape_string($institute_code);



$query = "
DELETE FROM `online_event_portal`.`event` WHERE `event_id`='$event_id' and `institute_code`='$institute_code';";
mysql_query($query);
{
header('location:removeevent.php');
}
mysql_close($con);
}
?>