<?php
if( $_POST )
{

define('DB_HOST', 'localhost');
define('DB_NAME', 'online_event_portal'); 
define('DB_USER','root');
define('DB_PASSWORD','');
 

$connect = mysqli_connect("localhost", "root", "", "online_event_portal");
 if (!$connect)
  {
    die('Could not connect: ' . mysql_error());
  }

 

if(isset($_POST['search']))
{

$college_name = "veermata jijabai technological institute";


$college_name  = mysql_real_escape_string($college_name);

$query = "SELECT `student_name`,`student_id`,`college_name`,`event_name`,`event_id` FROM `online_event_portal`.`student_registration` WHERE `college_name` = '$college_name';";


$result = $connect->query($query);

while($row = $result->fetch_array(MYSQLI_BOTH))
{
	$student_name = $row['student_name'];
	$student_id = $row['student_id'];
	$college_name = $row['college_name'];
$event_name = $row['event_name'];
$event_id = $row['event_id'];


$student_name = htmlspecialchars($row['student_name'],ENT_QUOTES);
$student_id = htmlspecialchars($row['student_id'],ENT_QUOTES);
$college_name = htmlspecialchars($row['college_name'],ENT_QUOTES);
$event_name = htmlspecialchars($row['event_name'],ENT_QUOTES);
$event_id = htmlspecialchars($row['event_id'],ENT_QUOTES);


echo "  hii
<body>
<div style='margin:30px 0px;'>
      Name: $student_name<br />
      Email: $student_id<br />
      Website: $college_name<br />
 Email: $event_name<br />
 Email: $event_id<br />
 </body>
      
      
    </div>
  ";

}

mysqli_close($connect);

}
else{
	$student_name = "";
	$student_id = "";
	$college_name = "";
$event_name = "";
$event_id = "";
$venue = "";
$Description = "";
}
}
?>
