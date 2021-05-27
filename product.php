<head>
	<title>Display Products</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
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
	<li class="nav-item active">
      <a class="nav-link " href="admin.php">Admin</a>
    </li>
  </ul>
</nav>

<?php

include'connection.php';

$id=$_GET['productid'];
$query="select * from tblproducts where productid=$id";
$res=mysqli_query($conn,$query);

$row=mysqli_fetch_array($res);

	?>
	<div class="container">
	<div class="row">
	<div class="col-md-6">
	<br>
	<br>
	<img src="<?php echo $row['image'];?>" height="500"width="300"> 
	</div>
	
<div class="col-md-6 m-auto">
<br>
<br>
<br>
<strong>Product iD :</strong>
<p ><?php echo $row['productid']; ?></p>
<strong>product Name :</strong>
<p ><?php echo $row['name'];?> </p>
<strong>Product Price :</strong>
<p ><?php echo $row['price'];?> </p>
<strong>Product Code:</strong>
<p ><?php echo $row['code'];?> </p>
<strong>Product Instock :</strong>
<p ><?php echo $row['instock'];?> </p>
<strong>Product Discount : </strong>
<p ><?php echo $row['discount'];?> </p>
<strong>Product Size :</strong>
<p ><?php echo $row['size'];?> </p>
<strong>Product Detail :</strong>
<p><?php echo $row['detail'];?> </p>


</div>
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
