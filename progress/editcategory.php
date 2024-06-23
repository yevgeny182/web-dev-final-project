<?php
	include('conn.php');

	$id=$_GET['category'];

	$cname=$_POST['cname'];

	$sql="update category set cat_name='$cname' where category_id='$id'";
	$conn->query($sql);

	header('location:category.php');
?>