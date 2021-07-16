<?php 

$host="localhost";
$user="root";
$password="";
$db="demo";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link href="Login.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="full-page">
		<div class="navbar">
			<div>
				<a href='website.html'>Home Deco</a>
			</div>
			<nav>
				<ul id='MenuItems'>
					<li><a href='#'>Home</a></li>
					<li><a href='#'>About Us</a></li>
					<li><a href='#'>Products</a></li>
					<li><a href='#'>About Us</a></li>
			</nav>
	<div class="container">
	<img src="Images/user.jpg"/>
		<form>
			<div class="form-input">
				<input type="text" name="text" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>