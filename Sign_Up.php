<?php

include("connect.php");

$error="";

if(isset($_POST['submit']))
{
$firstName=$_POST['fname'];
$lastName=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$passwordConfirm=$_POST['passwordConfirm'];
/*$address=$_POST['address'];
$image=$_FILES ['image']['name']; #WIll get name of the file which the user uploads
$tmp_image=$_FILES['image']['tmp_name'];
$imageSize= $_FILES ['image']['size'];
$filetype= $_FILES['image']['type'];*/

/*if (strlen($firstName) < 3)
{
	$error= "First name is too short. You must enter more than three characters";
}else if (strlen($lastName) < 3)
{
	$error="Last name is too short. You must enter more than three characters";
}
else if(filter_var($email,FILTER_VALIDATE_EMAIL))
{
	$error="Please enter valid email address";
}
*/
$insertQuery = "INSERT INTO signup (firstName,lastName,email,password,passwordConfirm)
VALUES ('$firstName','$lastName','$email','$password','$passwordConfirm')";
if(mysqli_query($con,$insertQuery))

	//if(move_uploaded_file($tmp_image,"images/$image"))
	{
		$error="You are sucessfully signed up";
	}
else
{
	$error="Sorry...Try Again..!";
}

}
?>

<html>
<head>
	<title>Classy Home</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
		<div id="error"><?php echo $error; ?></div>
        <div id="formdiv">
        <form method="POST" action="Sign_Up.php" enctype="multipart/form-data">
            <label>First Name:</label></br>
            <input type="text" name="fname"/></br></br>

            <label>Last Name:</label></br>
            <input type="text" name="lname"/></br></br>

            <label>Email:</label></br>
            <input type="text" name="email"/></br></br>

            <label>Password:</label></br>
            <input type="password" name="password"/></br></br>
            
            <label>Re-enterPassword:</label></br>
            <input type="password" name="passwordConfirm"/></br></br>
            
            <input type="submit" name="submit"/></br>

        </form>
        </div>
        </div>
</body>
<html>