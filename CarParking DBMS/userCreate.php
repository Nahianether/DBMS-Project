<!doctype html>
<html>
<head>
<title>Create</title>
<style>

.create{
width:360px;
margin:80px auto;
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius:10px;
border:2px solid #ccc;
padding:0px 40px 80px;
margin-top:70px; 
}

input[type=text], input[type=password]{
width:99%;
padding:3px;
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
<div class="create">
<h1 align="center"><u>Create User Account</u></h1>
		  
		<form action="userInfoInsert.php" method="post">
		
		 <b><label type="name" >Username:</label><b>
		 <input type="text" id="name" name="name"/>
		  

         <b><label type="name" >Password:</label><b>
		 <input type="password" id="pass"  name="pass" >

         <label type="name">Mobile Number:</label>
		 <input type="text"  id="mobile" name="mobile">

         <label type="name">Address:</label>
		 <input type="text" id="address" name="address">
		 
         <label type="name" >Email:</label>
		 <input type="text" id"mail"  name="mail" >
		 
         <label type="name">NID:</label>
		 <input type="text" id="nid" name="nid"  >

           <label type="name" >Car No:</label>
		 <input type="text" id="car"   name="car"  >
		 
		 <label type="name" >A/C No:</label>
		 <input type="text" id="ac"  name="ac">
		

		 
		 <!---<a href="userInfoInsert.php"><input type="submit" style="position:absolute;top:600px;left:570px;width:200px;" name="Create"></a>--->
		<a href="userInfoInsert.php"><input type="submit" style="position:absolute;top:600px;left:570px;width:200px;" name="Create"></a>
		
		
		</form>
		
	



</body>
</html>