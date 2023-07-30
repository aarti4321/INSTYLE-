<?php
include("header.php");
 $con=mysqli_connect("localhost","root","","instyle");
?>
<body>
  <div class="container" style="width: 100%; margin-left: 120px;">
<div class="row text-center" style="height: 400px;">
  <h2 style="text-align: left;"><b>Featured Products</b></h2>
  <?php 
  $con;
  $import_pro="SELECT * FROM insertproduct WHERE FEATURED='YES' ";
  $run_query=mysqli_query($con,$import_pro);
  while ($rows = mysqli_fetch_array($run_query)){
$pro_id=$rows['ID'];
       $name = $rows['NAME'];
       $brand = $rows['BRAND'];
       $pcategory = $rows['CATEGORY'];
       $price = $rows['PRICE'];
       $desce = $rows['DESCRIPTION'];
       $image1 = $rows['IMAGE1'];
       echo "<div class='col-md-3' style='background-color:white; margin:10px; height:450px;  width: 300px;border: solid #ff3300;'>
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
</div>
</div>
</body>