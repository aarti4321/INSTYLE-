<?php

session_start();
include("config.php");
include("header.php");
include_once 'cart/Cart.class.php'; 
$cart = new Cart; 
 $Username=$_SESSION['username'];

if(!isset($_SESSION['username']))
{

    echo "<script>window.open('userlogin.php?Log in first!!!','_self')</script>";
}
else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom style -->
<link href="css/style.css" rel="stylesheet">
<meta name="viewport" content="width=device-width,initial scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  <center>
    <table class="table table-responsive" style="font-size: 15px;">
   <tr class="row" >
      <th class="col-md-1" style="background-color: #000066; color: white; ">Order Id</th>
      

<th class="col-md-1" style="background-color: #000066;  color: white; ">Product Id</th>

<th class="col-md-1" style="background-color: #000066;  color: white; ">Name</th>

<th class="col-md-1" style="background-color: #000066;  color: white; ">Contact Number</th>

<th class="col-md-1" style="background-color: #000066;  color: white; ">Pin</th>
<th class="col-md-1" style="background-color: #000066;  color: white; ">City / District</th>
<th class="col-md-2" style="background-color: #000066;  color: white; ">Address</th>
<th class="col-md-1" style="background-color: #000066;  color: white; ">State</th>

   </tr>

<?php
 $con=mysqli_connect("localhost","root","","instyle");
$get_pro="SELECT * FROM orders WHERE USERNAME = '$Username' ORDER BY ORDER_ID DESC";
$run_query=mysqli_query($con,$get_pro);
$i=0;
  while($row_pro=mysqli_fetch_array($run_query))
   {
    $order_id=$row_pro['ORDER_ID'];
    $uname=$row_pro['USERNAME'];
    $pid=$row_pro['PRO_ID'];
    $name=$row_pro['NAME'];
    $num=$row_pro['NUMBERS'];
    
    $pin=$row_pro['PIN'];
    $city=$row_pro['CITY'];
    $add=$row_pro['ADDRESS'];
    $state=$row_pro['STATE'];
    echo "
    <tr class='row'>
     <td class='col-md-1'>$order_id</td>
     <td class='col-md-1'>$pid</td>
     <td class='col-md-1'>$name</td>
     
     <td class='col-md-1'>$num</td>
     <td class='col-md-1'>$pin</td>
     <td class='col-md-1'>$city</td>
     <td class='col-md-2'>$add</td>
     <td class='col-md-1'>$state</td>
     <td class='col-md-1'><a href='details.php?ID=$pid'>view details</a></td>
    </tr>
    ";
   }

?>
 </table>
</center>
<?php } ?>