<?php
if( $_POST )
{
define('DB_HOST', 'localhost');
define('DB_NAME', 'test'); 
define('DB_USER','root');
define('DB_PASSWORD','');
 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 


  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("test", $con);

  $cname = $_POST['clgname'];
  $icode = $_POST['itcode'];
  

  $clgname = mysql_real_escape_string($cname);
  $itcode= mysql_real_escape_string($icode);
  

  

$query = "
INSERT INTO `test`.`insert`(`cname`,`icode`)VALUES('$clgname','$itcode');";

  mysql_query($query);

  echo "<h2>Thank you for your Comment!</h2>";

  mysql_close($con);
}
?>