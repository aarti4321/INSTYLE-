<?php 

// Initialize shopping cart class 
include_once 'cart/Cart.class.php'; 
$cart = new Cart; 
// Include the database config file 
require_once 'config.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		INSTYLE
	</title>
	
	
	<meta name="viewport" content="width=device-width,initial scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style type="text/css">
ul{
	list-style: none;
}
ul li{
	float: right;
	padding: 12px;
	font-size: 22px;
	margin-top: 15px;
}
ul li a{
	text-decoration: none;
	color: white;
}
ul li a:hover{
	color: #99ccff;
	
	padding: 5px;
}
</style>
	</head>
	<body style="background-color:#cccccc; mask-image: linear-gradient(to bottom, black 100%);">
		<table class="table table-responsive"  style="background-color: black; border: none; margin-top: 20px;">
			<tr class="row">
				<td class="col-md-4">
					<h1><span style="color: black;background-color: red;border-radius: 5px; margin-left: 30px;font-family: italic;font-size: 40px;">IN</span>
					<span style="color: white;font-family: italic;font-size: 35px;">STYLE</span></h1>
					<h6 style="color: #33ccff;;margin-left: 65px; font-family: italic;">FASHION AHEAD</h6>
				</td>
				<td class="col-md-8" style="text-align: right;">
					<ul>
						<li><a href="userlogin.php">Sign In</a></li>
						<li><a href="cart/viewCart.php">Cart(<?php echo ($cart->total_items() > 0)?$cart->total_items(). '':'0'; ?>)</a></li>
						
						
						<li><a href="home.php">Home</a></li>
						<?php
						include("search.php");
						?>
					</ul>
				</td>
			</tr >
			
		</table>
	</body>

</html>