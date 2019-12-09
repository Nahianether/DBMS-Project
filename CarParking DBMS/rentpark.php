<?php
  session_start();
  ?>
<!DOCTYPE html>
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
	 
      
	  
	  <form action="rentPark1.php" method="post" style="text-align:center;">
          
		 <!--- 
		  <body>

          <div id="map" style="width:45%;height:350px;top:175px;left:550px"></div>

          <script>
          function myMap() {
          var mapCanvas = document.getElementById("map");
          var mapOptions = {
          center: new google.maps.LatLng(23.8103, 90.4125),
          zoom: 12
          };
          var map = new google.maps.Map(mapCanvas, mapOptions);
          }
          </script>

          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3dUeONYfEr62Fdam61jNuLYFSC3UhjQ0&callback=myMap"></script>

          </body>
		  
    --->
		  
		  <label type="name" style="width:500px;height:60px;position:absolute;left:0px; "><b><u>Fill Up the Parking informations:</u></b></label>
		  
		  
		  <label type="name" style="width:100px;height:20px;position:absolute;top:50px;left:150px; "><b>Height:</b></label>
          <input type="text" placeholder="ex.50.00 m" style="width:100px;height:20px;position:absolute;top:50px;left:230px; " name="height" size="30" />
		  
		  <label type="name" style="width:100px;height:20px;position:absolute;top:50px;left:340px; "><b>Width:</b></label>
		  <input type="text" placeholder="ex.20.00 m" style="width:100px;height:20px;position:absolute;top:50px;left:415px; " name="width" size="30" />
		  
		  <label type="name" style="width:100px;height:20px;position:absolute;top:50px;left:525px; "><b>Length:</b></label>
		  <input type="text" placeholder="ex.100.00 m" style="width:100px;height:20px;position:absolute;top:50px;left:610px; " name="length" size="30" />
		  
		  
		  <label type="name" style="width:250px;height:90px;position:absolute;top:100px;left:150px; "><b>Enter Your Location:</b></label>
          <input type="text" placeholder="ex.274/1,Shere Bangle Road,Dhanmondi,Dhaka-1209" style="position:absolute;top:100px;left:380px; " name="location" size="30" />

		  
          <label type="name" style="width:100px;height:20px;position:absolute;top:150px;left:150px; "><b>Block:</b></label>
          <input type="text" placeholder="A" style="width:100px;height:20px;position:absolute;top:150px;left:230px; " name="block" size="30" />
		  
		  <label type="name" style="width:100px;height:20px;position:absolute;top:150px;left:340px; "><b>No:</b></label>
          <input type="text" placeholder="ex.1" style="width:100px;height:20px;position:absolute;top:150px;left:420px; " name="no" size="30" />
		  

           <label type="name" style="width:200px;height:20px;position:absolute;top:200px;left:150px; "><b><u>Available From:<u></b></label>
		   
		    <label type="name" style="width:100px;height:20px;position:absolute;top:250px;left:200px; "><b>Date:</b></label>
          <input type="datetime-local" style="width:200px;height:20px;position:absolute;top:250px;left:275px; " name="dateF" size="30" />
		  
		   <label type="name" style="width:200px;height:20px;position:absolute;top:300px;left:150px; "><b><u>Available Untill:</u></b></label>
		   
		    <label type="name" style="width:100px;height:20px;position:absolute;top:350px;left:200px; "><b>Date:</b></label>
          <input type="datetime-local" style="width:200px;height:20px;position:absolute;top:350px;left:275px; " name="dateT" size="50" />
		  
		  <label type="name" style="width:200px;height:20px;position:absolute;top:400px;left:150px; "><b>Fair per Hour:</b></label>
          <input type="text" placeholder="ex.20Tk" style="width:100px;height:20px;position:absolute;top:400px;left:320px; " name="fair" size="50" />

          
          <a href="rentPark1.php"><input type="submit" value="submit" name="Submit" onclick="alert('Done')" style="position:absolute;top:450px;left:400px; "></a>
		   
		   		   
		   
		  
		   </form>
	  
	  
	  
      
	  
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