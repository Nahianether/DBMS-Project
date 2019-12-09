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
        <li class="active"><a href="home.php">Home</a></li>
		<li><a href="actionbookparking.php">BookParking</a></li>
		<li><a href="actionrelease.php">ReleaseParking</a></li>
        <li><a href="aboutus.php">About</a></li>
        <li><a href="contactus.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="userlogout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      
    </div>
    <div class="col-sm-8 text-left"> 
	 
      <table>
          <tr>
          <td>
         <img src="parkAbout.jpg" style="height:500px;width:550px;position:absolute;top:20px;left:15px; " /></td>
</table>

<table >
   <tr>
     <td>
         <font size="3" face="arial"  style="position:absolute;top:20px;left:580px"> 
                                      Ilegal road side parking is a crime.But including Banglaseh
                                      most of the countries of the world do not maintain the rules
                                      parking<br>properly.The drivers and the passengers<br>think about 
                                       their comfortable way first.<br>But they don't think about other 
                                      people.<br>Their illegal parking creates a lot of traffic jam
                                      throughout the city and that traffic jam<br>is responsible for
                                      wasting valuable times.<br>
                                      To solve the problem we thought a system as a solution.<br>By
                                      following this system we can park our cars in a legal 
                                      process.<br>That's why we named this application as "ParkLeg"....<br><br><br>
                                      </font></td>
  </tr>
  <tr>
    <td>
       <font size="4" face="arial"  style="position:absolute;top:360px;left:580px" color="red"><u>
                                     LeaderShip:</u></font></td>
  </tr>


  <tr>
     <td>
         <font size="3" face="arial"  style="position:absolute;top:390px;left:580px">
                               Lomat Haider Chowdhury<br>United International University(Student)<br>011152011</font></td>
 </tr>

 <tr>
     <td>
         <font size="3" face="arial"  style="position:absolute;top:460px;left:580px">
                               Intishar-Ul Islam<br>United International University(Student)<br>011152016</font></td>
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