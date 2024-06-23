<?php
	include('conn.php');

	$pname=$_POST['pname'];
	$price=$_POST['price'];
	$category=$_POST['category'];

	$fileinfo=PATHINFO($_FILES["photo"]["name"]);

	if(empty($fileinfo['filename'])){
		$location="";
	}
	else{
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["photo"]["tmp_name"],"images/" . $newFilename);
	$location="images/" . $newFilename;
	}
	
	$sql="insert into product (prod_name, category_id, price, image) values ('$pname', '$category', '$price', '$location')";
	$conn->query($sql);

	header('location:product.php');

?>