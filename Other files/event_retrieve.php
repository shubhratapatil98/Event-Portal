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
$event_id = $_POST['id'];



$event_id = mysql_real_escape_string($event_id);

$query = "SELECT `event_name`,`event_id`,`institute_code`,`date`,`time`,`venue`,`Description` FROM `online_event_portal`.`event` WHERE `event_id` = '$event_id';";


$result = mysqli_query($connect, '$query');

$save = mysql_query($result);

while($row = mysql_fetch_row($save))
{
	$event_name = $row['event_name'];
	$event_id = $row['event_id'];
	$institute_code = $row['institute_code'];
	$date = $row['date'];
	$time = $row['time'];
	$venue = $row['venue'];
	$Description = $row['Description'];

$event_name = htmlspecialchars($row['event_name'],ENT_QUOTES);
$event_id = htmlspecialchars($row['event_id'],ENT_QUOTES);
$institute_code = htmlspecialchars($row['institute_code'],ENT_QUOTES);
$date = htmlspecialchars($row['date'],ENT_QUOTES);
$time = htmlspecialchars($row['time'],ENT_QUOTES);
$venue = htmlspecialchars($row['venue'],ENT_QUOTES);
$Description = htmlspecialchars($row['Description'],ENT_QUOTES);

echo "  <div style='margin:30px 0px;'>
      event name: $event_name<br />
      event id: $event_id<br />
      institute code: $institute_code<br />
date: $date<br />
time: $time<br />
venue: $venue<br />
Description: $Description<br />
      
      
    </div>
  ";

}

mysqli_close($connect);

}
else{
	$event_name = "";
	$event_id = "";
	$institute_code = "";
$date = "";
$time = "";
$venue = "";
$Description = "";
}
}
?>
