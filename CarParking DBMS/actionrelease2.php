<?php
session_start();
$user=$_SESSION['user'];
$pass=$_SESSION['pass'];
$car=$_SESSION['car'];
$pblock=$_SESSION['pblock'];
$pno=$_SESSION['pno'];
$loc=$_SESSION['Location'];
$ac=$_SESSION['a/c'];

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
	 


	 
	<?php
		   

$error=''; 
$row='';
$pdate=$_SESSION['pDate'];

if(isset($_POST['release'])){
 
	

 $conn = mysqli_connect("localhost", "root", ""); 
 $db = mysqli_select_db($conn, "parkingp");
 //echo $reg;
//  $query="Insert Into Releasec values(now(),'$car')";
  //$result=mysqli_query($conn,$query);
  
  $query="Select TimeDiff(now(),pDate) as newTime from park_c where park_c.Car_No='$car'";
  $result=mysqli_query($conn,$query);
  $row=mysqli_fetch_assoc($result);
 if(mysqli_num_rows($result)>0){
  $fare=$row["newTime"];
  echo $fare;
  list($hr,$mn,$sc)=explode(":",$fare);
 }

  
  $query="Select RentAmount,A_NID from parking where Parking_Block='$pblock' and Parking_No=$pno AND Location='$loc'";
  $result=mysqli_query($conn,$query);
  $row=mysqli_fetch_assoc($result);
  $amount=$row["RentAmount"];
  $aid=$row["A_NID"];
  

  $amount=30;
  $mn=$mn/60;
  $sc=$sc/3600;
  $data=$hr*$amount;
  $data1=$mn*$amount;
  $data2=$sc*$amount;
  $data=$data+$data1+$data2;
  $data=ceil($data);
  $_SESSION['fare']=$data;
  $_SESSION['balance']=$_SESSION['balance']-$data;
  $b=$_SESSION['balance'];
  
  $query="Select AC_No from admin where A_NID='$aid'";
  $result=mysqli_query($conn,$query);
  $row=mysqli_fetch_assoc($result);
  $a_ac=$row['AC_No'];
  
  $query="Select Balance from BankAccount where AC_No='$a_ac'";
  $result=mysqli_query($conn,$query);
  $row=mysqli_fetch_assoc($result);
  $b1=$row["Balance"]+$data;
  
  
  $query= "Update  BankAccount set Balance=$b where AC_No='$ac'";
  $result=mysqli_query($conn,$query);
  
  $query= "Update  BankAccount set Balance=$b1 where AC_No='$a_ac'";
  $result=mysqli_query($conn,$query);
  
  
  $query= "Update  parking set IsEmpty=0 where Parking_Block='$pblock' AND Parking_No=$pno AND Location='$loc'";
  $result=mysqli_query($conn,$query);
  
  $query1="Delete From park_c where Car_No='$car'";
  $result1=mysqli_query($conn,$query1);
  
 
 
   header("Location:actionrelease3.php");
   
   mysqli_close($conn);  
   
   
  
}

?>



	 
	  
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