<?php
	include('conn.php');

	$id=$_GET['product'];

	$pname=$_POST['pname'];
	$category=$_POST['category'];
	$price=$_POST['price'];

	$sql="select * from product where prod_id='$id'";
	$query=$conn->query($sql);
	$row=$query->fetch_array();

	$fileinfo=PATHINFO($_FILES["photo"]["name"]);

	if (empty($fileinfo['filename'])){
		$location = $row['photo'];
	}
	else{
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
		move_uploaded_file($_FILES["photo"]["tmp_name"],"images/" . $newFilename);
		$location="images/" . $newFilename;
	}

	$sql="update product set prod_name='$pname', category_id='$category', price='$price', image='$location' where prod_id='$id'";
	$conn->query($sql);


	header('location:product.php'); 
?>