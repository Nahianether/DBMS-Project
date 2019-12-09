<?php
session_start();
$user=$_SESSION['user'];
$pass=$_SESSION['pass'];
$car=$_SESSION['car'];
$pblock=$_SESSION['pblock'];
$pno=$_SESSION['pno'];
$loc=$_SESSION['Location'];

?>

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

  
  $query="Select RentAmount from parking where Parking_Block='$pblock' and Parking_No=$pno AND Location='$loc'";
  $result=mysqli_query($conn,$query);
  $row=mysqli_fetch_assoc($result);
  $amount=$row["RentAmount"];

  $amount=30;
  $mn=$mn/60;
  $sc=$sc/3600;
  $data=$hr*$amount;
  $data1=$mn*$amount;
  $data2=$sc*$amount;
  $data=$data+$data1+$data2;
  $data=ceil($data);
  $_SESSION['fare']=$data;
 // echo $data;
  

  
   header("Location:actionrelease3.php");
  
   
   mysqli_close($conn);  
   
   
  
}

?>