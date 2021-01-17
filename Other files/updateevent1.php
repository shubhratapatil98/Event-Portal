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

  

$event_name = $_POST['ename'];
$event_id = $_POST['eid'];
$date = $_POST['date'];
$time = $_POST['time'];
$venue = $_POST['venue'];
$Description = $_POST['desc'];



$event_name = mysql_real_escape_string($event_name);
$event_id = mysql_real_escape_string($event_id);
$date = mysql_real_escape_string($date);
$time = mysql_real_escape_string($time);
$venue = mysql_real_escape_string($venue);
$Description = mysql_real_escape_string($Description);


 $query = "
UPDATE  `online_event_portal`.`event` SET `event_name`='$event_name', `date`='$date', `time`='$time', `venue`='$venue', `Description`='$Description' WHERE `event_id`='$event_id';";

  mysql_query($query);
{
header('location:update_event.html');
}
mysql_close($con);
}
?>