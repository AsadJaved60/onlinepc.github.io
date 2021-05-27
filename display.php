<!DOCTYPE html>
<html>
<head>
	<title>About us</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>

</style>
<body>
	<header>
    <div class="container-fluid">
        <div class="row">
    <div class="col-md-6 col-sm-4">
                <img src="images/logo1.jpg" class="logo" alt="not found" >
            </div>
            
            <div class="col-md-6 col-sm-8">
            
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-google"></a>
                </div>
              </div>
            </div>




<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="home.php">Home</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="aboutus.php">About Us</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="imageproc.php">Products</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link " href="contact.php">Contact us</a>
    </li>
  </ul>
</nav>

</header>

<head>
	<title>Display Products</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>

<body>
<br>

<div class="container">
<p class=" ml-5"><button class="btn btn-success"><a href="crud.php" class="text-white"> +Add product</a></button></p>
<div class="col-lg-12 col-sm-12 m-auto">
<table class="table table-striped table-bordered table-hover table-responsive">
<h1 class="text-center text-dark">Display Data</h1>

<tr class="bg-dark text-white">
<th>Id </th> 
<th>Name</th> 
<th>Price </th>
<th> Code</th>
<th>Status </th> 
<th> Discount</th> 
<th> Size</th>
<th> Description</th> 
<th>Image</th> 
<th>Delete </th> 
<th>Update </th> 
  
</tr>
<?php
 include'connection.php';
 
 $query="select * from tblproducts";
 $res=mysqli_query($conn,$query);
 
while($row=mysqli_fetch_array($res))
{
?>

<tr>
<td><?php echo $row['productid']; ?></td> 
<td><?php echo $row['name'];?> </td> 
<td><?php echo $row['price'];?> </td> 
<td><?php echo $row['code'];?> </td> 
<td><?php echo $row['instock'];?> </td> 
<td><?php echo $row['discount'];?> </td> 
<td><?php echo $row['size'];?> </td> 
<td><?php echo $row['detail'];?> </td> 
<td><img src="<?php echo $row['image'];?>" height="50" width="100"> </td> 
<td>  <button class="btn btn-danger " ><a href="delete.php?productid=<?php echo $row['productid'];?>" class="text-white">Delete</a></button></td>
<td>  <button class="btn btn-primary " ><a href="update.php?productid=<?php echo $row['productid'];?>" class="text-white">Update</a></button></td>

</tr>

<?php
}
?>



</table>
  
</div>
</div>




	<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

  <div style="background-color: #6351ce;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Apple</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>MacBook" is a term used for a brand of Mac notebook computers that Apple started producing in 2006. The American multinational corporation created MacBook computers when it consolidated its PowerBook and iBook lines during its transition to Intel processor-based products..</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Products</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">MacBooks</a>
        </p>
        <p>
          <a href="#!">Apple Phones</a>
        </p>
        <p>
          <a href="#!">Apple Tablets</a>
        </p>
        <p>
          <a href="#!">Apple Software</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Your Account</a>
        </p>
        <p>
          <a href="#!">About US</a>
        </p>
        <p>
          <a href="#!">Prices</a>
        </p>
        <p>
          <a href="#!">Help</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> Apple@macbook.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
        <p>
          <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> AppleMacBoook.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>
