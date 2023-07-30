<?php
include("config.php");


 $con=mysqli_connect("localhost","root","","instyle");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width,initial scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
<form method="post" action="">
	<input type="text" name="search" style=" width: 250px; height: 40px; margin-top: 25px;margin-right: 0px;; border-right: 0; border-left: 1px solid white; border-top: 1px solid white; border-bottom: 1px solid white; outline: none; background-color: transparent;color: white;font-size: 20px;" placeholder="search..." >

	<button type="submit" name="submit" style="height: 40px; width: 60px;margin-top: 25px; background-color: #33ccff;border-right: 0; border-left: 0; border-top: 0; border-bottom: 1px solid #33ccff;  outline: none; margin-right: 40px;margin-left: 0px;"  ><i class="fa fa-search fa-2x" style="color: white;" ></i></button>
</form>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","instyle");
if(isset($_POST['submit']))
{
	$search=$_POST['search'];
	
	$get_user="SELECT * FROM insertproduct WHERE BRAND='$search' OR NAME='$search'";
	$run_user=mysqli_query($con,$get_user);
	$check_user=mysqli_num_rows($run_user);
	
	if($check_user==0 )
	{
		echo "<script>alert('No product found')</script>";
	}
	else

	{
		$_SESSION['search']=$search;
		echo "<script>window.open('searchdetails.php','_self')</script>";
	}
	}
?>
