<?php
  session_start();
  ?>


	  
	  <?php
		     
	$c='';
	$block='';
	$no='';
	$error='';
	$id=$_SESSION['nid'];
	$loca=$_POST['loc'];
	list($block,$no,$location)=explode("&nbsp",$loca);
	
	if(isset($_POST['submit'])){
        $conn = mysqli_connect("localhost", "root", ""); 
        $db = mysqli_select_db($conn, "parkingp");
       
		
        $query2="Delete from parking WHERE A_NID='$id' and Parking_Block='$block' and Parking_No=$no and Location='$location'";
        $result2=mysqli_query($conn,$query2);
       
        header("Location:adminHome.php");
 
                             mysqli_close($conn);  
                             }
 
                     
                             echo "<br>".$error;

				?>
	  
	  
      
	