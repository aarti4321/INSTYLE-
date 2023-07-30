<?php
  session_start();
  if(!isset($_SESSION['check']) || $_SESSION['check']==0) {
    include("homeheadersignin.php");  
  }
  else {
    include("homeheadersignout.php");
  }
  
?>

<table class="table table-responsive">
	<tr class="row">
    <td class="col-md-12 ">
<img style="width: 100%; height: 600px" src="homeimages/pic5.JPG" >
    </td>
  </tr>
	


<tr class="row text-center">
  <td class="col-md-12">
    <h2 style="text-align: center;color: black;margin-top: 40px; margin-bottom: 40px;"><b><u>Featured Products</u></b></h2>
    <?php 
  $con;
  $import_pro="SELECT * FROM insertproduct WHERE FEATURED='YES' ORDER BY ID DESC LIMIT 12";
  $run_query=mysqli_query($con,$import_pro);
  while ($rows = mysqli_fetch_array($run_query)){
$pro_id=$rows['ID'];
       $name = $rows['NAME'];
       $brand = $rows['BRAND'];
       $pcategory = $rows['CATEGORY'];
       $price = $rows['PRICE'];
       $desce = $rows['DESCRIPTION'];
       $image1 = $rows['IMAGE1'];
       echo "<div class='col-md-3' style='background-color:white; margin-top: 20px; height:450px;width: 300px;border: solid #ff3300;margin-left: 60px;'>
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
  </td>
</tr>
</table>
<a style="text-decoration: none;"  href="viewallfeaturedproducts.php"><h3 style="text-align: right; margin-bottom: 100px; margin-right: 40px; color: #0000cc;"><b>View All </b></h3></a>
<h2 style="text-align: center;color: black; margin-bottom: 40px;margin-top: 40px;"><b><u>Premium Brands</u></b></h2>

<table class="table table-responsive" >
  <tr class="row">
    <td class="col-md-2" >
      <a href="brand/adidas.php"><img style="height: 250px; width: 250px;padding: 6px;"src="homeimages/adidas.jpg " class="img-responsive"></a>
    </td>
   <td class="col-md-2" >
      <a href="brand/levis.php"><img style="height: 250px; width: 250px;padding: 6px;"src="homeimages/levis.png" class="img-responsive"></a>
    </td>
   <td class="col-md-2" >
      <a href="brand/wrogn.php"><img style="height: 250px; width: 250px;padding: 6px;"src="homeimages/wrogn.jpeg " class="img-responsive"></a>
    </td>
    <td class="col-md-2" >
      <a href="brand/puma.php"><img style="height: 250px; width: 250px;padding: 6px;"src="homeimages/puma.png " class="img-responsive"></a>
    </td>
    <td class="col-md-2" >
      <a href="brand/fastrack.php"><img style="height: 250px; width: 250px;padding: 6px;"src="homeimages/fastrack.jpeg " class="img-responsive"></a>
    </td>
     <td class="col-md-2" >
      <a href="brand/sonata.php"><img style="height: 250px; width: 250px;padding: 6px;"src="homeimages/sonata.jpeg " class="img-responsive"></a>
    </td>
  </tr>
  <tr class="row">
    <td class="col-md-2" >
      <a href="brand/allen.php"><img style="height: 250px; width: 250px;padding: 6px;"src="homeimages/allen.jpeg " class="img-responsive"></a>
    </td>
    <td class="col-md-2" >
      <a href="brand/roadster.php"><img style="height: 250px; width: 250px;padding: 6px;"src="homeimages/roadster.jpeg " class="img-responsive"></a>
    </td>
    <td class="col-md-2" >
      <a href="brand/flying.php"><img style="height: 250px; width: 250px;padding: 6px;"src="homeimages/flying.png " class="img-responsive"></a>
    </td>
    
    <td class="col-md-2" >
      <a href="brand/skybags.php"><img style="height: 250px; width: 250px;padding: 6px;"src="homeimages/skybags.jpeg " class="img-responsive"></a>
    </td>
<td class="col-md-2" >
      <a href="brand/redtape.php"><img style="height: 250px; width: 250px;padding: 6px;"src="homeimages/redtape.png " class="img-responsive"></a>
    </td>
     <td class="col-md-2" >
      <a href="brand/hrx.php"><img style="height: 250px; width: 250px;padding: 6px;"src="homeimages/hrx.jpeg " class="img-responsive"></a>
    </td>
  </tr>

</table>
<h2 style="text-align: center;color: black;margin-top: 40px; margin-bottom: 40px;"><b><u>Shop By Category</u></b></h2>

<table class="table table-responsive">
  <tr class="row">
    <td class="col-md-3" >
      <a href="mens/men.php"><img style="height: 300px; width: 300px;padding: 6px;"src="homeimages/men.jpeg " class="img-responsive"></a>
      <h3 style="text-align: center; color: black;"><b>Men</b></h3>
    </td>
   <td class="col-md-3" >
      <a href="women/women.php"><img style="height: 300px; width: 300px;padding: 6px;"src="homeimages/women.jpeg " class="img-responsive"></a>
      <h3 style="text-align: center; color: black;"><b>Women</b></h3>
    </td>
   <td class="col-md-3" >
      <a href="kids/kid.php"><img style="height: 300px; width: 300px;padding: 6px;"src="homeimages/kid.jpeg " class="img-responsive"></a>
      <h3 style="text-align: center; color: black;"><b>Kid</b></h3>
    </td>
    <td class="col-md-3" >
      <a href="viewallaccessories.php"><img style="height: 300px; width: 300px;padding: 6px;"src="homeimages/accessories.jpeg " class="img-responsive"></a>
      <h3 style="text-align: center; color: black;"><b>Accessories</b></h3>
    </td>
  </tr>
  </table>
<a style="text-decoration: none;"  href="viewallproduct.php"><h3 style="text-align: right; margin-bottom: 100px; margin-right: 40px; color: #0000cc;"><b>View All Products</b></h3></a>
<?php
include("footer.php")
?>