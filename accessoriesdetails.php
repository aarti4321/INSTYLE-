<?php
include("header.php");
?>

<?php
if(isset($_GET['ID']))
{
	$con=mysqli_connect("localhost","root","","instyle");
	$pro_id=$_GET['ID'];
	$get_details="SELECT * FROM insertproduct WHERE ID=$pro_id";
	$run_query=mysqli_query($con,$get_details);
  while ($rows = mysqli_fetch_array($run_query)){
$pro_id=$rows['ID'];

       $name = $rows['NAME'];
       $brand = $rows['BRAND'];
       $pcategory = $rows['CATEGORY'];
       $price = $rows['PRICE'];
       $desce = $rows['DESCRIPTION'];
      
       $image1 = $rows['IMAGE1'];
       $image2 = $rows['IMAGE2'];
       $image3 = $rows['IMAGE3'];
       $image4 = $rows['IMAGE4'];
      echo "
      
       <div class='container' style='background-color:#fff; margin-bottom:60px;border: solid #ff3300;'>
       <div class='row'>
       <div class='col-md-3'><br/><img src='admin/productimages/$image1' class='img-responsive'><br/></div>
        <div class='col-md-3'><br/><img src='admin/productimages/$image2' class='img-responsive'><br/></div>
         <div class='col-md-6' style='text-align: center; margin-top: 60px;  '>
       <h3><b>$brand</b></h3>
       <h4>$name</h4>
       <h3 style='margin-top : 20px;margin-bottom: 30px;'><b>Rs $price</b></h3>
       

       <a href='cart/addcart.php?action=addToCart&ID=$pro_id' class='btn btn-danger btn-lg'style='background-color: #ff3300;'>Add To Cart</a>
       <a href='cart/CartAction.php?action=addToCart&ID=$pro_id' class='btn btn-info btn-lg'style='background-color: #3333ff;'>Buy Now</a></br>
       
       </div>
        </div>
        <div class='row'>
        <div class='col-md-3'><br/><img src='admin/productimages/$image3' class='img-responsive'><br/></div>
        <div class='col-md-3'><br/><img src='admin/productimages/$image4' class='img-responsive'><br/></div>
        <div class='col-md-6' style='text-align: center; margin-top: 60px;'>
      <h4><b><u>Product Details</u></b></h4>
       <h5>$desce<h5><br>
       
       </div>
</div>
       </div>
       ";
}
}
?>
