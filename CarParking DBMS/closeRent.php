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
	 
      
	  
	  <label type="name" style="position:absolute; "><h1>Parking Space:</h1></label>
		  
		  
          
		  
		 
		  <div class="space" style="position:absolute;top:80px;">
		  
		   <?php
		     
			  $c='';
			  $block='';
			  $no='';
		      $error='';
			  $loc='';
              $conn = mysqli_connect("localhost", "root", ""); 
              $db = mysqli_select_db($conn, "parkingp");
              $id=$_SESSION['nid'];
              $query = "SELECT * FROM parking WHERE parking.A_NID='$id'";

              $result=mysqli_query($conn,$query);
              if(!$result){
	               echo "done";
              }
			  
              if(mysqli_num_rows($result)>0){
	               while($row=mysqli_fetch_assoc($result)){   
						$c=$row["Parking_Block"]."-".$row["Parking_No"];
						$block=$row["Parking_Block"];
						$no=$row["Parking_No"];
						$loc=$row["Location"];
						?>
						<form action="closeRent1.php" method="post">  
								
						<input type="radio" name="loc" value="<?php echo $block."&nbsp".$no."&nbsp".$loc ?>">
							
						<?php
							echo $c."&nbsp;&nbsp;-&nbsp;&nbsp;".$loc."<br>"."<br>";
								
	                        }
							?>
							
						 <a href="closerent1.php"><input type="submit" value="Submit" name="submit" onclick="alert('You have closed your Rent')"></a>
						 </form>
						
						<?php
 
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