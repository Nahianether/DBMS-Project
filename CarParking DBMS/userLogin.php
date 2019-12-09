<?php
  session_start();
  ?>
<!doctype html>
<html>
<head>
<title>Login</title>
<style>
.login{
width:360px;
margin:50px auto;
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
margin-top:70px; 
}
input[type=text], input[type=password]{
width:99%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}
input[type=submit]{
width:100%;
background-color:#009;
color:#fff;
border:2px solid #06F;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px; 
}
</style>
</head>
<body>
<div class="login">
<h1 align="center">User Login</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
<input type="submit" value="Login" name="submit">
<a href=adminLogin.php>Login with Admin Account</a><br>
<a href=UserCreate.php>Create New User Account</a>


<?php 


$error=''; 
if(isset($_POST['submit'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
 $error = "Username or Password is Empty";
 }
 else
 {

 
 $user=$_POST['user'];
 $pass=$_POST['pass'];

 
 $conn = mysqli_connect("localhost", "root", "");

 $db = mysqli_select_db($conn, "parkingp");

 $query = "SELECT * FROM userp WHERE password='$pass' AND username='$user'";
 
 $result=mysqli_query($conn,$query);
 $row=mysqli_fetch_assoc($result);
  $_SESSION['user']=$user;
 $_SESSION['pass']=$pass;
 $_SESSION['mail']=$row["Email"];
 $_SESSION['mobile']=$row["Mobile_No"];
 $_SESSION['car']=$row["Car_No"];
 $_SESSION['nid']=$row["U_NID"];
 $_SESSION['count']=$row["PastParking_Count"];
 $_SESSION['a/c']=$row["AC_No"];
 $ac=$_SESSION['a/c'];
 
 $query1="SELECT Balance from BankAccount where AC_No='$ac'";
 $result1=mysqli_query($conn,$query1);
 $row1=mysqli_fetch_assoc($result1);
 $_SESSION['balance']=$row1["Balance"];
 
 if(mysqli_num_rows($result)>0){
 header("Location: home.php"); 
 }
 else
 {
 $error = "Username or Password is Invalid";
 }
 mysqli_close($conn); 
 }
 
}
echo "<br>".$error;

 
?>


</body>
</html>