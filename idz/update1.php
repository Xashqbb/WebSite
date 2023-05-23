<?php

require_once 'connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$category = $_POST['category'];
$image = $_FILES['edit-image']['name'];
$targetDir = 'Images/';
$targetFile = $targetDir . basename($image);
move_uploaded_file($_FILES['edit-image']['tmp_name'], $targetFile);

mysqli_query($connect,"UPDATE `products` SET `name`='$name',`price`='$price',`description`='$description',`image`='$image' ,`category`='$category' WHERE `products`.`id` = $id");

header('Location:/admin.php');
?>