<html>

<head>
	<title>Add product</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

<div class="col-md-6 col-sm-8 m-auto">

<form method="post">
<br><br><div class="card">
<div class="card-header bg-dark">
<h1 class="text-white text-center ">ADD PRODUCT</h1>
</div>
<br>
<label>Product Name</label> 
<input type="text" name="pname" class="form-control"><br> 

<label>Product price</label> 
<input type="text" name="price" class="form-control"><br> 






<input type="submit" name="submit" value="Add Product"><br>
<?php
include 'connection.php';

if(isset($_POST['submit']))
{
	$name=$_POST['price'];
	$pass=$_POST['price'];
	
	
	$query="INSERT INTO upload VALUES ('$name','$pass')";
	$res=mysqli_query($conn,$query);
	
	if($res)
	{
		echo "Data Sucessfully Registered";
	}
	else
	{
		echo "data not inserted";
	}
}
?>


</div>
</div>

</form>




</body>

