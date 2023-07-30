<?php
session_start();
include("header.php");
include('config.php');
 $search=$_SESSION['search'];

?>

<?php 
  
  $import_pro="SELECT * FROM insertproduct WHERE BRAND='$search'";
  $run_query=mysqli_query($con,$import_pro);
  while ($rows = mysqli_fetch_array($run_query)){
$pro_id=$rows['ID'];
       $name = $rows['NAME'];
       $brand = $rows['BRAND'];
       $pcategory = $rows['CATEGORY'];
       $price = $rows['PRICE'];
       $desce = $rows['DESCRIPTION'];
       $image1 = $rows['IMAGE1'];
       echo "<div class='col-md-3' style='background-color:white; margin:10px; height:450px;width: 300px;border: solid #ff3300;'>
       <a href='details.php?ID=$pro_id'>
       <img style='margin-bottom: 30px;height: 300px;' src='admin/productimages/$image1'
       class='img-responsive'></a>
      <h4><b>  $brand </b></h4>
      <h5>$name</h5>
       <h4><b>Rs. $price</b></h4>
       </div>
       ";
   }
 ?>