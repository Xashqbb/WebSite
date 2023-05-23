<?php
require_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    
    $image = $_FILES['image']['name'];
    $targetDir = 'Images/';
    $targetFile = $targetDir . basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);

    mysqli_query($connect, "INSERT INTO `products`(`id`, `name`, `price`, `description`, `image`, `category`) VALUES (NULL, '$name', '$price', '$description', '$image', '$category')");

    header('Location: /admin.php');
    exit();
}
?>
