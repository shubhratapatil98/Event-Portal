<?php 
define('DB_HOST', 'localhost');
define('DB_NAME', 'online_event_portal'); 
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


$clg="pict";

$college_name = mysql_real_escape_string($clg);


$sql="SELECT * FROM student_registration WHERE `college_name` = '$college_name' " 


or die(mysql_error());



$query = mysql_query($sql);
//$result=mysql_query($sql) or die(mysql_error());

// Checking table row
//$count=mysql_num_rows($result);
// If username and password is a match, the count will be 1


echo "

<html>
<title>VJTI TECHNOVANZA</title>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>


<style>
.jumbotron{
margin-top: -50px;
margin-bottom: -20px;
background-color: sky blue;
background-image: url('https://cdn.pixabay.com/photo/2017/02/12/02/54/fractal-2059202__340.jpg');

padding-bottom: 0;

}
.navbar {
      margin-bottom: 0;
      border-radius: 10;
      

    }


    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 50px;
      background-color: grey;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: black;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 700px) {
      .sidenav {
        height: auto;
        padding: 15px;
        
      }
      .row.content {height:700;} 
    }
 .container {
      padding: 20px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
 .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }

p.padding {
    padding-bottom: 0cm;
}

w3-padding-32 {
    padding-top: 32px !important;
    padding-bottom: 32px !important;
width: 100%;
}
.w3-container, .w3-panel {
    padding: 0.01em 16px;
   
}

.container-fluid {
    padding-right: px;
    padding-left: 15px;
    margin-right: -35px;
    margin-left: -35px;
}

body
{
background-color:#ecd5c5;
}

.col-sm-9 {
    float: left;
   
}
.col-sm-3 {
background-color: #f5cc23;
}

table
{
border-collapse: collapse;
}

table, td, tr
{
border: 1px solid black;
}

</style>
<div class='jumbotron'>

<center> <h1 style='color:white; text-shadow: 7px 7px black;font-family: Impact;font-size-adjust: 5.58; font-size: 900%;'>ONLINE EVENT PORTAL</h1></center><br>

</div>
<nav class='navbar navbar-inverse' style='background-color:#3e3267;'>
  <div class='container-fluid'>
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>                        
      </button>
      
    </div>
    <div class='collapse navbar-collapse' id='myNavbar'>
      <ul class='nav navbar-nav'>
        <li style='color:black;'><a href='#'>Home</a></li>
        
        <li class='dropdown' style='color:black;'>
          <a class='dropdown-toggle' data-toggle='dropdown' href='#'>REGIONS <span class='caret'></span></a>
          <ul class='dropdown-menu'>
            <li><a href='m.html'>MUMBAI</a></li>
            <li><a href='pune.html'>PUNE</a></li>
            <li><a href='nagpur.html'>NAGPUR</a></li>
             <li><a href='Aurangabad-Region.html'>AURANGABAD</a></li>
          </ul>
        </li>


         <li style='color:black;'>
     <form name='myForm' class'form-horizontal' action='vjti_registration.php' method='POST'>

        <button  type='submit' class='w3-btn w3-#3e3267' style='background-color:#3e3267;padding: 14px 22px;text-align: center;color: white;'>VIEW REGISTRATION</button>
      </form>
</li>

	
        
      </ul>
      <ul class='nav navbar-nav navbar-right'>
        
        <form class='navbar-form navbar-left'>
      <div class='input-group'>
        <input type='text' class='form-control' placeholder='Search'>
        <div class='input-group-btn'>
          <button class='btn btn-default' type='submit'>
            <i class='glyphicon glyphicon-search'></i>
          </button>
        </div>
      </div>
    </form>
        
      </ul>
    </div>
  </div>
</nav>

</html>";



echo "<div class='col-sm-9' style='width: 1550px; height: 500px;'>
      <h2 style='color: red'><center><b>REGISTRATION LIST</b></center></h2>
      <div class='container'>";


echo "<br/>";
		echo "<table border='1' class='table table-hover'>";
        echo "<tbody>";
		echo "<thead>";
		echo "<tr>";
		echo "<td><h3> <b>  Student Name    </b></h3></td>";
         		echo "<td><h3><b>Student id</b></h3></td>";
        	                 echo "<td><h3><b>College name</b></h3></td>";
		echo "<td><h3><b>event name</b></h3></td>";
		echo "<td><h3><b>event id</b></h3></td>";
		echo "</tr>";
				
echo "</thead>";
while($data = mysql_fetch_array($query, MYSQL_ASSOC))
	{
//$data = mysql_fetch_assoc($result);
$student_name=$data['student_name'];
$student_id=$data['student_id'];
$college_name=$data['college_name'];
$event_name=$data['event_name'];
$event_id=$data['event_id'];


	         echo "<tr>";
			 echo "<td><h4>".$student_name."</h4></td>";
			 echo "<td><h4>".$student_id."</h4></td>";
	         echo "<td><h4>".$college_name."</h4></td>";
 echo "<td><h4>".$event_name."</h4></td>";
 echo "<td><h4>".$event_id."</h4></td>";
	         echo "</tr>";
	}
     echo "</tbody>";
     echo "</table>";
     echo "</div>";
    
echo "</div>";
   						
  

?>

