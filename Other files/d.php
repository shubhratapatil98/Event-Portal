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

  


$institute_id = $_POST['icode'];
$coordinator_id = $_POST['coid'];




$institute_id = mysql_real_escape_string($institute_id);
$coordinator_id = mysql_real_escape_string($coordinator_id);




$query = "
DELETE FROM `online_event_portal`.`add_coordinator` WHERE `coordinator_id`='$coordinator_id' and `institute_id`='$institute_id';";
mysql_query($query);
{
header('location:removeco1.html');
}
mysql_close($con);
}
?>