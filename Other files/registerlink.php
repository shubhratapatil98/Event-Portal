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

  

$name = $_POST['sname'];
$id = $_POST['sid'];
$cname = $_POST['cname'];
$ename = $_POST['ename'];
$eid = $_POST['eid'];




$student_name = mysql_real_escape_string($name);
$student_id = mysql_real_escape_string($id);
$college_name = mysql_real_escape_string($cname);
$event_name = mysql_real_escape_string($ename);
$event_id = mysql_real_escape_string($eid);


 $query = "
INSERT INTO `online_event_portal`.`student_registration`(`student_name`,`student_id`,`college_name`,`event_name`,`event_id`)VALUES('$student_name','$student_id','$college_name','$event_name','$event_id');";

  mysql_query($query);
$_SESSION['member_id'] = $user['member_id'];
header('location:registration.html');
  

  mysql_close($con);
}
?>