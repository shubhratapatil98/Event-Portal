<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Event portal</title>
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
    .row.content {height: 750px}
    
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

  <title>Online Event Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

.containera{
 height: 100%;
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
background-color: #330000;
  }

p.padding {
    padding-bottom: 0cm;
}
.jumbotron{
margin-top: -50px;
margin-bottom: -20px;
 background: url("https://cdn.pixabay.com/photo/2017/01/27/14/11/background-2013175__480.jpg") no-repeat center center fixed;
padding-bottom: 0;
}


			.login-box{
			background-color: rgba(220, 225,225,0.4);
			}
			
body { 
 background: url('9.jpg') no-repeat center center fixed; 
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 background-size: cover;
}

  </style>
</head>
<body>
<div class="head">
<p class="padding= 0px">
<div class="jumbotron">

<center> <h1 style="color: #606060 ; text-shadow: 4px 4px #ffe8e8;font-family: Impact; font-stretch: expanded; font-size-adjust:1.00;">ONLINE EVENT PORTAL</h1></center><br>
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
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">REGIONS <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">MUMBAI</a></li>
            <li><a href="#">PUNE</a></li>
            <li><a href="#">NAGPUR</a></li>
             <li><a href="#">AURANGABAD</a></li>
          </ul>
        </li>
        <li><a href="#">INSTITUTES</a></li>
	
        
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
<li><a href="#"><span class="glyphicon glyphicon-user"></span> Add Co-ordinator</a><br/></li>
<li><a href="#"><span class="glyphicon glyphicon-user"></span> Remove Co-ordinator</a><br/></li>
<li><a href="#"><span class="glyphicon glyphicon-user"></span> Change Password</a><br/></li>
      

    </ul>
    </div></div>
      </div>
   </div> 




<div class="col-sm-7 text-left">
<div class="container">
  <center><h2>REMOVE CO-ORDINATOR</h2></center>
</br>

<div class="containera">
	    
        <div id="loginbox" style="margin-top:10px;" class="mainbox col-md-26 col-md-offset-3 col-sm-48 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="forgetpwd.html">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >
         <form name="myForm" class="form-horizontal" action="d.php" method="POST" onsubmit="return validateForm()">

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Co-ordinator Id:</label>
      <div class="col-sm-5">
        <input type="Co-ordinator Id" class="form-control" id="coid" name="coid" placeholder="Enter Co-ordinator Id">
      </div>
    </div>
  
  <form class"form-horizontal">
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Institute Code:</label>
      <div class="col-sm-5">          
        <input type="Institute Code" class="form-control" id="icode" name="icode" placeholder="Enter Institute Code">
      </div>
    </div>
    

  <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-2">
        <button type="submit" class="btn btn-warning" onsubmit="return validateForm()" value="submit">Delete</button><center>


      </div>
<div class="form-group">        
      <div class="col-sm-offset-0 col-sm-2">
        <button type="submit" class="btn btn-warning">Cancel</button>
      </div>

      </div>
  </form></div>
                                </div>    
                             



                        </div>                     
</div></div></div></div>
</div>
</br>
</br>
 </br>
</br>
</br>
</br>
</br></br>
</br>
</br></div>

<script>
function myFunction() {
    alert("Record Added Successfully......!!!!");
}

function validateForm()
{
    var a = document.forms["myForm"]["coid"].value;
var b = document.forms["myForm"]["icode"].value;


    
if (a == "") {
        alert("enter co-ordinator id");
        return false;
    }
else if (b == "")
{
	alert("Enter institute code");
	return false;
}


else
{
alert("Remove Successfully......!!!!");
}

}


</script>

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
</p>

</body>
</html>
