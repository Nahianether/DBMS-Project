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
<h1 align="center">Admin Login</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
<input type="submit" value="Login" name="submit">
<a href=userLogin.php>Login with User Account</a><br>
<a href=adminCreate.php>Create New Admin Account</a>


<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
 $error = "Username or Password is Empty";
 }
 else
 {
 //Define $user and $pass
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "parkingp");
 //sql query to fetch information of registerd user and finds user match.
 $query = "SELECT * FROM Admin WHERE Password='$pass' AND Username='$user'";
 $result=mysqli_query($conn,$query);
 $row = mysqli_fetch_assoc($result);
 
 
 $_SESSION['user']=$row["Username"];
 $_SESSION['pass']=$row["Password"];
 $_SESSION['mail']=$row["Email"];
 $_SESSION['mobile']=$row["Mobile_No"];
 $_SESSION['nid']=$row["A_NID"];
 $_SESSION['a/c']=$row["AC_No"];
 echo $_SESSION['user'];
 
  if(mysqli_num_rows($result)>0){
    header("Location: adminHome.php"); // Redirecting to other page
 }
 else
 {
 $error = "Username or Password is Invalid";
 }
 
 mysqli_close($conn); // Closing connection
 }
 
}
echo "<br>".$error;
 
?>

</body>
</html>