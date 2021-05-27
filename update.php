<?php
include 'connection.php';
$id=$_GET['productid'];

if(isset($_POST['submit']))
{
	$name=$_POST['pname'];
	$price=$_POST['price'];
	$code=$_POST['pcode'];
	$status=$_POST['pstock'];
	$dis=$_POST['pdis'];
	$size=$_POST['psize'];
	$discep=$_POST['pdes'];
	$file=$_FILES['file'];
	$filename=$file['name'];
	$filepath=$file['tmp_name'];
	
	$dest='upload/'.$filename;
	move_uploaded_file($filepath,$dest);
	$query="update tblproducts set  productid=$id,name='$name',price=$price,code='$code',instock=$status,discount=$dis,size='$size',detail='$discep',image='$dest' where productid=$id";
	$res=mysqli_query($conn,$query);
	
	
	if($res)
	{
		header('location:display.php');
	}
	else
	{
		echo "data not inserted";
	}
}
?>
<head>
	<title>Update product</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<div class="col-md-6 col-sm-8 m-auto">

<form method="post" enctype="multipart/form-data">
<br><br><div class="card">
<div class="card-header bg-dark">
<h1 class="text-white text-center ">UPDATE PRODUCT</h1>
</div>
<br>
<label>Product Name</label> 
<input type="text" name="pname" class="form-control"><br> 

<label>Product price</label> 
<input type="text" name="price" class="form-control"><br> 

<label>Product Code</label> 
<input type="text" name="pcode" class="form-control"><br> 

<label>Product Status</label> 
<input type="text" name="pstock" class="form-control"><br> 

<label>Product Discount</label> 
<input type="text" name="pdis" class="form-control"><br> 

<label>Product Size</label> 
<input type="text" name="psize" class="form-control"><br> 

<label>Product Description</label> 
<input type="text" name="pdes" class="form-control"><br>
<label>Upload picture</label> 
<input type="file" name="file" class="form-control"><br>


<input class=" btn btn-dark"type="submit" name="submit" value="Update Product"><br>


</div>
</div>