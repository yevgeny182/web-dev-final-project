
<?php

$a=$_POST['a'];
$b=$_POST['b'];

$c=$_POST['c'];

$conn= new mysqli('localhost','root','');
$select= $conn->select_db('milkteabar');
$conn->query("INSERT INTO  `milkteabar`.`users` (`id` ,`name` ,`email` ,`pass`)VALUES (NULL ,  '$a',  '$b',  '$c');");
header("location:login.php");

?>