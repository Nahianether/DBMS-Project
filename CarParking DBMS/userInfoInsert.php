<?php
//userLogin.php

$error=''; 
if(isset($_POST['Create'])){
 if(empty($_POST['name']) || empty($_POST['pass'])|| empty($_POST['mobile'])|| empty($_POST['address'])|| empty($_POST['mail'])|| empty($_POST['nid'])|| empty($_POST['car'])|| empty($_POST['ac'])){
 $error = "Fill all the information correctly";
// echo $error;
 }
 else
 {
	 //echo "Start";
	 $conn = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($conn, "parkingp");
 $user=$_POST['name'];
 $pass=$_POST['pass'];
 $mob=$_POST['mobile'];
 $add=$_POST['address'];
 $mail=$_POST['mail'];
 $nid=$_POST['nid'];
 $car=$_POST['car'];
 $ac=$_POST['ac'];
 $query = "Insert into BankAccount(AC_No,AC_Name,Balance,AEmail,AMobileNo) values('$ac','$user',500.00,'$mail','$mob')";
 //echo($query);
// die();
$result=mysqli_query($conn,$query);
 
 $query1 ="Insert into userp(Username,Password,Email,Address,Mobile_No,Car_No,AC_No,U_NID,PastParking_Count) values('$user','$pass','$mail','$add','$mob','$car','$ac','$nid',0)";
 $result1=mysqli_query($conn,$query1);
 //echo "insert";
 header("Location: userLogin.php");

 }
 
}
echo "<br>".$error;

 
?>
