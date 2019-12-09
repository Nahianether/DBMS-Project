<?php
    session_start();
	$id=$_SESSION['nid'];
	?>
 
 <?php
		   
			$error=''; 
            if(isset($_POST['Submit'])){
            if(empty($_POST['height']) || empty($_POST['width'])|| empty($_POST['length'])|| empty($_POST['location'])|| empty($_POST['block'])|| empty($_POST['no'])|| empty($_POST['dateF'])|| empty($_POST['dateT'])|| empty($_POST['fair'])){
            $error = "Fill all the information correctly";
             //echo $error;
             }
            else
            {
	         //echo "Start";
	         $conn = mysqli_connect("localhost", "root", "");
             $db = mysqli_select_db($conn, "parkingp");
             $height=$_POST['height'];
             $width=$_POST['width'];
             $length=$_POST['length'];
             $loc=$_POST['location'];
             $block=$_POST['block'];
             $no=$_POST['no'];
             $dateF=$_POST['dateF'];
             $timeF=$_POST['timeF'];
             $dateT=$_POST['dateT'];
             $timeT=$_POST['timeT'];
             $fair=$_POST['fair'];
			
			// echo $height." ".$width." ".$length." ".$loc." ".$block." ".$no." ".$dateF." ".$dateT." ".$fair." ".$id;
			 
             $query = "Insert into Parking(Parking_Block,Parking_No,Location,isEmpty,Parking_Hight,Parking_Width,Parking_Length,RentAmount,aDate,nDate,A_NID) values('$block','$no','$loc',0,'$height','$width','$length','$fair','$dateF','$dateT','$id')";
             //echo($query);
             // die();
             $result=mysqli_query($conn,$query);
             
             // echo $result1;
             //echo "insert";
             header("Location:adminHome.php");

             }
 
             }
             echo "<br>".$error;

 
             ?>
		   