<!DOCTYPE html>
<html lang="en">
<head>
  <title>ONLINE EVENT PORTAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 10;

    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 30px;
      background-color: #c27e79;
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

  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .container {
      padding: 80px 120px;
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
.jumbotron{
margin-top: -50px;
margin-bottom: -20px;
background-color: sky blue;
background-image: url("https://cdn.pixabay.com/photo/2017/02/12/02/54/fractal-2059202__340.jpg");

padding-bottom: 0;

}
body
{
background-color:#f1eaad;
}



  </style>
</head>
<body>
<div class="head">
<p class="padding= 0px">
<div class="jumbotron">

<center> <h1 style="color:white; text-shadow: 7px 7px black;font-family: Impact;font-size-adjust: 5.58; font-size: 900%;">ONLINE EVENT PORTAL</h1></center><br>
</p>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="front.html">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">REGIONS <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="m.html">MUMBAI</a></li>
            <li><a href="pune.html">PUNE</a></li>
            <li><a href="nagpur.html">NAGPUR</a></li>
             <li><a href="Aurangabad-region.html">AURANGABAD</a></li>
          </ul>
        </li>
      
	
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <form class="navbar-form navbar-left">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
        
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <div class="well">
        <div class="media">
    <div class="media-left">
     <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
<li><a href="#">..</a><br/></li>
     <li><a href="addevent.php"><span class="glyphicon glyphicon-pencil"></span>  ADD EVENT</a><br/></li>
<li><a href="removeevent.php"> <span class="glyphicon">&#xe020;</span>  REMOVE EVENT</a><br/></li>
<li><a href="update_event.html"><span class="glyphicon glyphicon-edit"></span>  UPDATE EVENT</a><br/></li>
<li><a href="change_password.html"><span class="glyphicon glyphicon-user"></span>  CHANGE PASSWORD</a><br/></li>
    </ul>
    </div></div>
      </div>
      </div>

   <div class="col-sm-10 text-left">
<div class="container">

<div class="form-group">
      
<div class="col-sm-5">
  <h2 style="color:#f18973"><b><center>REMOVE EVENT</center></b></h2>
</div>
</div>

</br>
</br>
</br>
   <form name="myForm" class="form-horizontal" action="devent.php" method="POST" onsubmit="return validateForm()">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Event Id:</label>
      <div class="col-sm-5">
        <input type="number" class="form-control" id="eid" name="eid" placeholder="Enter Event Id">
      </div>
    </div>
  
  
    
  <div class="form-group">
      <label class="control-label col-sm-2" for="email">Event Name:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="ename" name="ename" placeholder="Enter Event Name">
      </div>
    </div>

  
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Institute Code:</label>
      <div class="col-sm-5">          
        <input type="number" class="form-control" id="icode" name="icode" placeholder="Enter Institute Code">
      </div>
    </div>
    </br>

  <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-2">
        <button type="submit" class="btn btn-default" style="background-color: #f18973;padding: 11px 32px;text-align: center;border-radius: 8px;font-size: 18px;color: white;" onsubmit="return validateForm()" value="submit">Delete</button>

      </div>

       <div class="form-group">        
      <div class="col-sm-offset-0 col-sm-2">
        <button type="submit" class="btn btn-default" style="background-color: #f18973;padding: 11px 32px;text-align: center;border-radius: 8px;font-size: 18px;color: white;">Cancel</button>
      </div>




      
  </form></div>
</div></div></div></div></div>

<script>
function myFunction() {
    alert("Record Deleted Successfully......!!!!");
}
function validateForm()
{
var a = document.forms["myForm"]["ename"].value;
var b = document.forms["myForm"]["eid"].value;
var c = document.forms["myForm"]["icode"].value;
if (a == "") {
        alert("Name must be filled out");
        return false;
    }
else if (b == "")
{
	alert("Enter event id");
	return false;
}
else if (c == "")
{
	alert("Enter institute id");
	return false;
}
else
{
alert("Event Deleted Successfully......!!!!");
}
}
</script>

</br>
</br>
 </br>
</br>
</br>
</br>
</br></br>
</br>
<footer class="container-fluid text-center">
  <center>
<center><p>Contact Us With</p>  
  <img src="http://marketingland.com/wp-content/ml-loads/2014/07/google-plus-logo-1920.png" class="img-circle" alt="Cinque Terre" width="70" height="70"> 
   <img src="http://lofrev.net/wp-content/photos/2016/07/twitter_logo.jpg" class="img-circle" alt="Cinque Terre" width="70" height="70"> 
    <img src="http://img.talkandroid.com/uploads/2014/06/instagram_app_icon-450x450.png"  class="img-circle" alt="Cinque Terre" width="70" height="70"> 
     <img src="http://www.hd-freeimages.com/uploads/large/logo-wallpapers/free-hd-facebook-icon-wallpapers-download.jpg" class="img-circle" alt="Cinque Terre" width="70" height="70"> 
 </center>
</center>
<br/>
</footer>
</p>
</div>
</body>
</html>
