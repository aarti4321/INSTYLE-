
<?php
include("config.php");
session_start();

 $con=mysqli_connect("localhost","root","","instyle");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<style type="text/css">
		#bg {
			background-image: url("homeimages/login.jpg");
			background-position: center;
			background-size: 100%;

		}
		
	</style>
</head>

<body id="bg">
<center>

	<table class="table table-responsive"  style="background-color: transparent; border: none; margin-top: 30px;">
			<tr class="row">
				<td class="col-md-4">
					<h1><span style="color: black;background-color: red;border-radius: 5px; margin-left: 30px; font-size: 50px;">IN</span>
					<span style="color: white; font-size: 45px;">STYLE</span></h1>
					<h4 style="color: #33ccff;margin-left: 70px;margin-top: 0px;">FASHION AHEAD</h4>
				</td>
			</tr>
		</table>
		
	<table class="table table-responsive " style="width: 20%; background-color: transparent; margin-top:0px;  position: center; ">
	
	<form action="" method="post">
			<tr class="row">
		<td >
			<input type="text" name="name" style=" width: 100%; padding: 10px; margin: 5px; border-right: 0; border-left: 0; border-top: 0; border-bottom: 1px solid #999; outline: none; background-color: transparent;color: grey;" placeholder="Enter your name" required>
		</td>
	</tr>
		<tr class="row">
		<td >
			<input type="email" name="email" style=" width: 100%; padding: 10px; margin: 5px;margin-top: 25px; border-right: 0; border-left: 0; border-top: 0; border-bottom: 1px solid #999; outline: none; background-color: transparent;color: grey;" placeholder="Enter your email id" required>
		</td>
	</tr>
	<tr class="row">
		<td >
			<input type="text" name="number" style=" width: 100%; padding: 10px; margin: 5px;margin-top: 25px; border-right: 0; border-left: 0; border-top: 0; border-bottom: 1px solid #999; outline: none; background-color: transparent;color: grey;" placeholder="Enter your contact number" required>
		</td>
	</tr>
		<tr class="row">
		<td >
			<input type="date" name="dob" style=" width: 100%; padding: 10px; margin: 5px; margin-top: 25px;border-right: 0; border-left: 0; border-top: 0; border-bottom: 1px solid #999; outline: none; background-color: transparent;color: grey;" placeholder="Enter your date of birth" required>
		</td>
	</tr>
	<tr class="row">
		<td >
			<input type="text" name="username" style=" width: 100%; padding: 10px; margin: 5px;margin-top: 25px; border-right: 0; border-left: 0; border-top: 0; border-bottom: 1px solid #999; outline: none; background-color: transparent;color: grey;" placeholder="Type your Username" required>
		</td>
	</tr>
	<tr class="row">
		<td >
			<input type="password" name="password" style=" width: 100%; padding: 10px; margin: 5px;margin-top: 25px; border-right: 0; border-left: 0; border-top: 0; border-bottom: 1px solid #999; outline: none; background-color: transparent;color: grey;" placeholder="Type your Password" required>
		</td>
	</tr>
	<tr class="row">
		<td class="col-md-12" style="padding-top: 15px;color: white;text-align: center;">
			<span><input type="checkbox" name="" required></span><span>I agree to the </span><span><a href="terms.php" style="color: #4db8ff;text-decoration: none;">T&C </a></span>&<span><a href="privacypolicy.php" style="color: #4db8ff;text-decoration: none;"> Privacy Policy</a></span>
		</td>
	</tr>
	
	
<tr class="row text-center">
		<td class="col-md-12" style="padding-top: 15px;" >
			<input type="submit" name="register" value="Register" class="btn" style="background-color: #ff0000; color: #fff;
			border-radius: 5px; border-style: none; height: 40px; margin-left:15px; width: 100%; text-align: center">
		</td>
	</tr>
	<tr class="row text-center" >
		<td class="col-md-12" style="color: white;text-align: center;padding-top:  10px;font-size: 20px;">
			Already have an account?
		</td>
	</tr>
	
<tr class="row text-center">
		<td class="col-md-12" style=" text-decoration: none;color: #ff5050;text-align: center;padding-top:  10px;font-size: 20px;">
			<a style=" text-decoration: none;color: #ff5050;text-align: center;padding-top:  25px;font-size: 20px;" href="userlogin.php" class="btn btn-success btn-block">Login Here</a>
		</td>
	</tr>
	</form>
	
</table>


</center>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","instyle");
if(isset($_POST['register']))
{
	$Name=$_POST['name'];
	$Email=$_POST['email'];
	$Number=$_POST['number'];
	$DOB=$_POST['dob'];
	$Username=$_POST['username'];
	$Password=$_POST['password'];
	$insertdata="INSERT INTO user(NAME,EMAIL,CONTACT_NUMBER,DOB,USERNAME,PASSWORD) VALUES ('$Name','$Email','$Number','$DOB','$Username','$Password')";
$run_query=mysqli_query($con,$insertdata);
	if($run_query)
	{
		echo"<script>alert('SUCCESS')</script>";
		echo "<script>window.open('userlogin.php','_self')</script>";
	}
	else
	{
		echo "<script>alert('error')</script>";
	}
}
?>
