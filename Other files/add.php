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

  

$coordinator_name = $_POST['coname'];
$college_name = $_POST['collagename'];
$institute_id = $_POST['icode'];
$coordinator_id = $_POST['coid'];
$email = $_POST['email'];
$cont_no = $_POST['cno'];
$user_name = $_POST['uname'];
$password = $_POST['pwd'];


$coordinator_name = mysql_real_escape_string($coordinator_name);
$college_name = mysql_real_escape_string($college_name);
$institute_id = mysql_real_escape_string($institute_id);
$coordinator_id = mysql_real_escape_string($coordinator_id);
$email = mysql_real_escape_string($email);
$cont_no = mysql_real_escape_string($cont_no);

$user_name = mysql_real_escape_string($user_name);
$password = mysql_real_escape_string($password);


 $query = "
INSERT INTO `online_event_portal`.`add_coordinator`(`coordinator_name`,`college_name`,`institute_id`,`coordinator_id`,`email`,`cont_no`,`user_name`,`password`)VALUES('$coordinator_name','$college_name','$institute_id','$coordinator_id','$email','$cont_no','$user_name','$password');";

  mysql_query($query);

$q="
INSERT INTO `online_event_portal`.`co-ordinator`(`username`,`password`,`institute_code`)VALUES('$user_name','$password','$institute_id');";
 mysql_query($q);


$_SESSION['member_id'] = $user['member_id'];
header('location:addcoordinator1.php');
  

  mysql_close($con);
}
?>