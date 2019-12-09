<?php
session_start();
$user=$_SESSION['user'];
$pass=$_SESSION['pass'];
$car=$_SESSION['car'];
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
	.info{


border:2px solid #000000;

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
	 
      
	  
	  
	
		   
		   <?php
		   

$error=''; 
$row='';
if(isset($_POST['infoB'])){
	

 $conn = mysqli_connect("localhost", "root", ""); 
 $db = mysqli_select_db($conn, "parkingp");
 
 $query="SELECT park_c.Car_No,pDate,Parking_No,Parking_Block,Location,Mobile_No,AC_No FROM userp,park_c WHERE park_c.Car_No='$car'";

 $result=mysqli_query($conn,$query);
 
 
 if(mysqli_num_rows($result)<=0){
	 echo "<br>"."<br>"."<br>"."<br>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."YOU DO NOT HAVE ANY PARKING"."<br>";
	 echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
	 echo "TO RELEASE"."<br>"."<br>"."<br>";
	 echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
	 echo "Please Go Home";
 }
 ?>
 
   <div class="info" style="position:absolute;top:160px;left:200px;height:260px;width:500px  ">
			
			
			<form action="actionrelease2.php" method="post">
			
			<?php

  if(mysqli_num_rows($result)>0){
	  
	 if($row=mysqli_fetch_assoc($result)){   
	    
		 $_SESSION['pblock']=$row["Parking_Block"];
		 $_SESSION['pno']=$row["Parking_No"];
		 $_SESSION['pDate']=$row["pDate"];
		 $_SESSION['Location']=$row["Location"];
		 echo "<br>"."&nbsp;&nbsp;&nbsp;Slot No:".$row["Parking_Block"]."-".$row["Parking_No"]."<br>"."<br>";
		 echo "&nbsp;&nbsp;&nbsp;Car No:".$row["Car_No"]."<br>"."<br>";
		 echo "&nbsp;&nbsp;&nbsp;Location:".$row["Location"]."<br>"."<br>";
		 echo "&nbsp;&nbsp;&nbsp;Entry info:".$row["pDate"]."<br>"."<br>";
		 echo "&nbsp;&nbsp;&nbsp;Mobile Number:".$row["Mobile_No"]."<br>"."<br>";
		 echo "&nbsp;&nbsp;&nbsp;A/C No:".$row["AC_No"]."<br>"."<br>";  
	}
	
	?>
	
	  <div>

    
	<a href="actionrelease2.php"><input type="submit" style="position:absolute;top:300px;left:200px;height:30px;width:100px" onclick="alert('Done Releasing')" value="Release" name="release"></a>

 
 
        </form>
		</div>
		<?php
 }
 
   mysqli_close($conn);  
   
   
  
}

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