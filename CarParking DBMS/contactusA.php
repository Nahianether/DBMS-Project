﻿<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 550px;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <div class="navbar-brand" href="#">Logo>
	  
	  <img src="mainLogo.jpg" width="85" height="57" style="position:absolute;top:-5px;left:-5px" />
	  
	  </div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="adminHome.php">Home</a></li>
		<li><a href="rentPark.php">RentParking</a></li>
		<li><a href="closeRent.php">CloseRent</a></li>
        <li><a href="aboutusA.php">About</a></li>
        <li><a href="contactusA.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="adminLogout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      
    </div>
    <div class="col-sm-8 text-left"> 
	 
      <table style="position:absolute;top:190px;left:300px">
   <tr>
     <td>
      <img src="addicon.jpg" width="40" height="40"  /></td>
  </tr>
  
</table>

<table style="position:absolute;top:190px;left:360px">
   <tr>
      <td>   UIU Campus-1,Dhanmondi 15(old)<br>Dhaka-1209</td>
   </tr>
</table> 

<table style="position:absolute;top:250px;left:300px">
   <tr>
     <td>
      <img src="call.jpg" width="40" height="40"  /></td>
  </tr>
  
</table>

<table style="position:absolute;top:260px;left:360px">
   <tr>
      <td>   +8801686513556,+8801724324832</td>
   </tr>
</table> 

<table style="position:absolute;top:310px;left:300px">
   <tr>
     <td>
      <img src="mail.jpg" width="40" height="40"  /></td>
  </tr>
  
</table>

<table style="position:absolute;top:320px;left:360px">
   <tr>
      <td>   parkLeg@gmail.com</td>
   </tr>
</table> 
      
	  
    </div>
    <div class="col-sm-2 sidenav">
      
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Powered by Edusoft Consultants Ltd</p>
<p>Copyright © 2013 - 2014 Edusoft Consultants Ltd. All rights reserved.</p>
</footer>

</body>
</html>