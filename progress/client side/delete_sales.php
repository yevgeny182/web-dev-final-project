<?php
	include('conn.php');

	$id = $_GET['purchase'];

	$sql="delete from purchase where purchaseid='$id'";
	$conn->query($sql);

	header('location:queueorder.php');
?>