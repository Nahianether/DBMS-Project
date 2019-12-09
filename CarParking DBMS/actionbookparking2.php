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
	  
      
	  <h1><u>Green Slots are available and Red Slots are Booked</u></h1>
	  
	  <div class="info">
		 
		 <?php
		

$error=''; 
$c='';
$c1='';
$em='';

if(isset($_POST['submit'])){
 
 
 $loc=$_POST["loca"];
 $date1=$_SESSION['date1'];
 $date2=$_SESSION['date2'];
 $_SESSION['location']=$loc;

 
 $conn = mysqli_connect("localhost", "root", "");
 
 $db = mysqli_select_db($conn, "parkingp");
 
 $query ="SELECT * FROM parking WHERE Location='$loc' AND ('$date1' between aDate AND nDate) AND ('$date2' between aDate AND nDate)" ;
 $result=mysqli_query($conn,$query);
 

	
	
	 if(mysqli_num_rows($result)>0){
	                        while($row=mysqli_fetch_assoc($result)){   
							    
								$c=$row["Parking_Block"];
								$c1=$row["Parking_No"];
								$em=$row["IsEmpty"];
								$aDate=$row["aDate"];
								$nDate=$row["nDate"];
								?>
							
							
							
								<form action="actionBookparking3.php" method="post"> 
								
								
								<?php
								 if($em==0 && ($date1>='$aDate' && $date2<='nDate')){
									 ?>
									 
									 
									 <input type="radio" name="loca" value="<?php echo $c."&nbsp".$c1 ?>">
									 
								<b><font color="green">
								<?php 
								  
								  echo $c."-".$c1."<br>";
								  
								 }
								 
								 ?>
								 </font></b>
								
								<!-- check for the cut part in tryRelease -->
								<?php
								 if($em==1){
									 ?>
									
									 
									 
								<font color="red">
								<?php 
								  echo "&nbsp&nbsp&nbsp&nbsp&nbsp".$c."-".$c1."<br>";
								 
								?>
								</font>
								<?php
								}
								?>
								
								
								
								<?php
							}
							?>
								  
								 <a href="actionBookparking3.php"><br><input type="submit" value="Submit" name="submit" onclick="alert('Slot is booked for you...')"></a>
							   </form>
							
							
							
							<?php
							
							  
                        }
						else{
							echo "No Parking Matched";
						}
	
	
 
 mysqli_close($conn); 
 
 
}
echo "<br>".$error;

 
?>
   </div>
	  
	  
	  
	  
	  
      
	  
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