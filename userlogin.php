
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

	<table class="table table-responsive"  style="background-color: transparent; border: none; margin-top: 100px;">
			<tr class="row">
				<td class="col-md-4">
					<h1><span style="color: black;background-color: red;border-radius: 5px; margin-left: 30px; font-size: 50px;">IN</span>
					<span style="color: white; font-size: 45px;">STYLE</span></h1>
					<h4 style="color: #33ccff;;margin-left: 70px;margin-top: 0px;">FASHION AHEAD</h4>
				</td>
			</tr>
		</table>
		
	<table class="table table-responsive " style="width: 20%; background-color: transparent; margin-top:20px;  position: center; ">
	
	<form action="" method="post">
	<tr class="row">
		<td col-md-12>
			<input type="text" name="username" style=" width: 100%; padding: 10px; margin: 5px; border-right: 0; border-left: 0; border-top: 0; border-bottom: 1px solid #999; outline: none; background-color: transparent;color: grey;" placeholder="username" required>
		</td>
	</tr>
	<tr class="row">
		<td col-md-12>
			<input type="password" name="pass"  style=" width: 100%; padding: 10px; margin: 5px;margin-top: 30px; border-right: 0; border-left: 0; border-top: 0; border-bottom: 1px solid #999; outline: none; background-color: transparent;color: grey;" placeholder="password" required>
		</td>
	</tr>
	
	<tr class="row text-center">
		<td class="col-md-12" >
			<input type="submit" name="login" value="Log In" class="btn" style="background-color: #ff0000; color: #fff;
			border-radius: 5px; border-style: none; height: 40px; margin-left:15px; width: 100%;margin-top: 40px; text-align: center">
		</td>
	</tr>
	
	<tr class="row text-center" >
		<td class="col-md-12" style="color: white;text-align: center;padding-top:  25px;font-size: 20px;">
			Do not have an account?
		</td>
	</tr>
	
<tr class="row text-center">
		<td class="col-md-12" style=" text-decoration: none;color: #ff5050;text-align: center;padding-top:  25px;font-size: 20px;">
			<a style=" text-decoration: none;color: #ff5050;text-align: center;padding-top:  25px;font-size: 20px;" href="register.php" class="btn btn-success btn-block">Register Here</a>
		</td>
	</tr>
	</form>
	
</table>


</center>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","instyle");
if(isset($_POST['login']))
{
	$Username=$_POST['username'];
	$Password=$_POST['pass'];
	$get_user="SELECT * FROM user WHERE USERNAME='$Username' AND PASSWORD='$Password'";
	$run_user=mysqli_query($con,$get_user);
	$check_user=mysqli_num_rows($run_user);
	$pattern = "/^'+/";
	if($check_user==0 || preg_match($pattern, $Username) || preg_match($pattern, $Password))
	{
		echo "<script>alert('Invalid Username')</script>";
	}
	else

	{
		$_SESSION['username']=$Username;

		echo "<script>window.open('home.php','_self')</script>";
	}
	$_SESSION['check']=$check_user;
}
?>
