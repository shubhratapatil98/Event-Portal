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
$institute_code = $_POST['icode'];
$date = $_POST['date'];
$time = $_POST['time'];
$venue = $_POST['venue'];
$Description = $_POST['desc'];




$event_name = mysql_real_escape_string($event_name);
$event_id = mysql_real_escape_string($event_id);
$institute_code = mysql_real_escape_string($institute_code);
$date = mysql_real_escape_string($date);
$time = mysql_real_escape_string($time);
$venue = mysql_real_escape_string($venue);
$Description = mysql_real_escape_string($Description);


 $query = "
INSERT INTO `online_event_portal`.`event`(`event_name`,`event_id`,`institute_code`,`date`,`time`,`venue`,`Description`)VALUES('$event_name','$event_id','$institute_code','$date','$time','$venue','$Description');";

  mysql_query($query);
$_SESSION['member_id'] = $user['member_id'];
header('location:addevent.php');
  

  mysql_close($con);
}
?>