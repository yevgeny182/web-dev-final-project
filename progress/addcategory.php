
<?php
	include('conn.php');

	$cname=$_POST['cname'];

	$sql="insert into category (cat_name) values ('$cname')";
	$conn->query($sql);

	header('location:category.php');

?>