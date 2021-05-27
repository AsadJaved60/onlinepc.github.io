<?php session_start()?>

<html>


<head>
	<title>Delete Products</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>


</body>
</html>
<?php

include'connection.php';

$id=$_GET['productid'];
$query="delete from tblproducts where productid=$id";
mysqli_query($conn,$query);

header('Location:display.php');


?>