 <?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "online event portal";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$institute_id = $_POST['icode'];
$coordinator_id = $_POST['coid'];

    // sql to delete a record
    $sql = "DELETE FROM add_coordinator WHERE id=3";

 $sql = "DELETE FROM add_coordinator WHERE coordinator_id=$coordinator_id and institute_id=$institute_id";

 $query = "
DELETE FROM `online_event_portal`.`add_coordinator` WHERE coordinator_id=$coordinator_id and institute_id=$institute_id";";




    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
