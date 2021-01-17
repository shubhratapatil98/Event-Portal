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


$result = $connect->query($query);

while($row = $result->fetch_array(MYSQLI_BOTH))
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

echo "  
<style>
body  {
    background-image: url('https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSwX8ZwH58BUODdHztIjjnJYIo0V5zRGTDR7KRo829M-espLMOn');
    background-color: '#cccccc';
}
</style>

<center> <h2 style='color:blue;'>$event_name</h2>
      Name: $event_name<br />
      ID: $event_id<br />
      Institute code: $institute_code<br />
 date: $date<br />
 time: $time<br />
 venue: $venue<br />
description: $Description<br />
      
      
   
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
