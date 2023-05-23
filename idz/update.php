<?php

require_once 'connect.php';

$product_id = $_GET['id'];

$product = mysqli_query($connect,"SELECT * FROM `products` WHERE id = $product_id");
$product = mysqli_fetch_assoc($product);

?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="style/style_admin.css">
</head>
<body>
  <h2>Редагувати товар</h2>
<form action="update1.php" method="post" enctype="multipart/form-data">
     <input type="hidden" name="id" value="<?= $product ['id']?>">
  <label for="edit-name">Назва:</label>
  <input type="text" name="name" value="<?= $product ['name']?>">
      
  <label for="edit-price">Ціна:</label>
  <input type="text" name="price" value="<?= $product ['price']?>">
      
  <label for="edit-description">Опис:</label>
 <textarea id="description" name="description" required><?= $product ['description']?></textarea>.
     
  <label for="category">Категорія:</label>
  <input type="text" id="category" name="category" value="<?= $product ['category']?>">
     
  <label for="edit-image">Фото:</label>
  <input type="file" id="edit-image" name="edit-image">
      
 <button type="submit">Зберегти зміни</button>
</form>
    </body>
</html>