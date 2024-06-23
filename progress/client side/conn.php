<?php

$conn = new mysqli('localhost', 'root', '', 'milkteabar');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    exit();
} 

?>