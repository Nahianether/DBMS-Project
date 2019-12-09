<?php
  session_start();
  $user=$_SESSION['user'];
$pass=$_SESSION['pass'];
  ?>


		 
		 <?php
		

$error=''; 

if(isset($_POST['submit'])){
 
 
 $loc=$_POST["loca"];
 list($block,$no)=explode("&nbsp",$loc);
 
// echo $loc."<br>";
 //echo $block."<br>";
 //echo $no;
 
 
 $loca=$_SESSION['location'];
 //echo $loca;
 
 $conn = mysqli_connect("localhost", "root", "");
 
 $db = mysqli_select_db($conn, "parkingp");
 
 $query= "Select Car_No from userp where Username='$user'";
 $result=mysqli_query($conn,$query);
 $row=mysqli_fetch_assoc($result);
 $car=$row['Car_No'];
 
  
 
 

$query= "Update  parking set IsEmpty=1 where Parking_Block='$block' AND Parking_No=$no and Location='$loca'";
 $result=mysqli_query($conn,$query);
 
 
 //echo $car;
 $query="Insert into park_c values('$car','$block',$no,now(),'$loca')";
 $result=mysqli_query($conn,$query);
 
 header("Location:home.php");
 
 /*
 if(!$result){
	    echo "No Parking";
    }
	
	
	 if(mysqli_num_rows($result)>0){
	                        while($row=mysqli_fetch_assoc($result)){   
							    
							}
							
	 }
						
 */
 mysqli_close($conn); 
 
 
}
echo "<br>".$error;

 
?>