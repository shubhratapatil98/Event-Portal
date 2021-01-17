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
background-image: url("https://cdn.pixabay.com/photo/2017/02/12/02/54/fractal-2059202__340.jpg");

padding-bottom: 0;

}

body
{
background: linear-gradient(to top left, #3333cc 0%, #ccffff 100%);
}

.sidenav {
    padding-top: 50px;
    background-color:#36486b;
    height: 100%;
}

.container {
    padding: 10px 120px;
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
      <li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a><br/></li>
<li><a href="#">.</a><br/></li>
<li><a href="addcoordinator1.php"><span class="glyphicon glyphicon-user"></span> Add Co-ordinator</a><br/></li>
<li><a href="removeco1.html"><span class="glyphicon glyphicon-user"></span> Remove Co-ordinator</a><br/></li>
<li><a href="achange_password.html"><span class="glyphicon glyphicon-user"></span> Change Password</a><br/></li>
      

    </ul>
    </div></div>
      </div>
   </div>  




<div class="col-sm-8 text-left"> 
   <div class="container">
  <center><h2 style="color:#bc5a45"><b>ADD CO-ORDINATOR</b></h2></center></br>

 
<form name="myForm" class="form-horizontal" action="add.php" method="POST" onsubmit="return validateForm()">

    <div class="form-group">
      <label class="control-label col-sm-2" for="email" style="color:black;font-size: 130%;">Co-ordinator:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="coname" name="coname" placeholder="Enter Name">
      </div>
    </div>

<div class="form-group">
      <label class="control-label col-sm-2" for="email" style="color:black;font-size: 130%;">College Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="collagename" name="collagename" placeholder="Enter College">
      </div>
    </div>

<div class="form-group">
      <label class="control-label col-sm-2" for="email" style="color:black;font-size: 150%;">Institute Code:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="icode" name="icode" placeholder="Enter Code">
      </div>
    </div>

<div class="form-group">
      <label class="control-label col-sm-2" for="email" style="color:black;font-size: 130%;">Co-ordinator ID:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="coid" name="coid" placeholder="Enter ID">
      </div>
    </div>

<div class="form-group">
      <label class="control-label col-sm-2" for="email" style="color:black;font-size: 130%;">E-mail ID:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter E-mail ID">
      </div>
    </div>

<div class="form-group">
      <label class="control-label col-sm-2" for="email" style="color:black;font-size: 130%;">Contact No:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="cno" name="cno" placeholder="Enter Contact No">
      </div>
    </div>

<div class="form-group">
      <label class="control-label col-sm-2" for="email" style="color:black;font-size: 130%;">Username:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="uname" name="uname" placeholder="Enter Name">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd" style="color:black;font-size: 130%;">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
      </div>
    </div></br>

    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        
<button type="submit" class="btn btn-default" style="background-color: #f18973;padding: 11px 32px;text-align: center;border-radius: 8px;font-size: 18px;color: white;" onsubmit="return validateForm()" value="submit">Add</button>
<button type="submit" class="btn btn-default" style="background-color: #f18973;padding: 11px 32px;text-align: center;border-radius: 8px;font-size: 18px;color: white;"><a href="addcoordinator1.php">Cancel</button>

      </div>
    </div>



  </form>
</div>
   </div></div>


  </div>
</div>
<script>
function myFunction() {
    alert("Record Added Successfully......!!!!");
}

function validateForm()
{
    var a = document.forms["myForm"]["coname"].value;
var b = document.forms["myForm"]["collagename"].value;
var c = document.forms["myForm"]["icode"].value;
var d = document.forms["myForm"]["coid"].value;
var e = document.forms["myForm"]["email"].value;
var f = document.forms["myForm"]["cno"].value;
var g = document.forms["myForm"]["uname"].value;
var h = document.forms["myForm"]["pwd"].value;
    
if (a == "") {
        alert("enter name");
        return false;
    }
else if (b == "")
{
	alert("Enter collage name");
	return false;
}
else if (c == "")
{
	alert("Enter institute id");
	return false;
}
else if (d == "")
{
	alert("Enter co-ordinator id");
	return false;
}
else if (e == "")
{
	alert("Enter email id");
	return false;
}
else if (f == "")
{
	alert("Enter contact no");
	return false;
}
else if (g == "")
{
	alert("Enter username");
	return false;
}
else if (h == "")
{
	alert("Enter password");
	return false;
}
else
{
alert("co-ordinator Added Successfully......!!!!");
}

}


</script>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<footer class="container-fluid text-center">
  <center>
<center><p>Contact Us With</p>  
  <img src="http://marketingland.com/wp-content/ml-loads/2014/07/google-plus-logo-1920.png" class="img-circle" alt="Cinque Terre" width="70" height="70"> 
   <img src="http://lofrev.net/wp-content/photos/2016/07/twitter_logo.jpg" class="img-circle" alt="Cinque Terre" width="70" height="70"> 
    <img src="http://img.talkandroid.com/uploads/2014/06/instagram_app_icon-450x450.png"  class="img-circle"  alt="Cinque Terre" width="70" height="70"> 
     <img src="http://www.hd-freeimages.com/uploads/large/logo-wallpapers/free-hd-facebook-icon-wallpapers-download.jpg" class="img-circle" alt="Cinque Terre" width="70" height="70"> 

    <img src="http://www.clipartkid.com/images/254/thumbs-up-symbol-for-facebook-free-cliparts-that-you-can-download-to-ejq10o-clipart.jpeg" class="img-circle"  alt="Cinque Terre" width="70" height="70"> 

 </center>
</center>
</footer>
 </div></p>
</body>
</html>
