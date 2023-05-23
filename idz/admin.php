<?php
require_once 'connect.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Адмін-панель | Магазин програмного забезпечення</title>
    <link rel="stylesheet" href="style/style_admin.css">
</head>
<body>
    <header>
        <h1>Адмін-панель | Магазин програмного забезпечення</h1>
    </header>
    <main>
        <h2>Каталог товарів</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Назва</th>
                    <th>Ціна</th>
                    <th>Опис</th>
                    <th>Категорія</th>
                    <th>Дії</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Отримання даних про товари з бази даних
                    $query = "SELECT * FROM products";
                    $result = mysqli_query($connect, $query);
                    $result=mysqli_fetch_all($result);
                    foreach($result as $result) {
                        ?>
                        <tr>
                        <td><?=$result[0]?></td>
                        <td><?=$result[1]?></td>
                        <td><?=$result[2]?></td>
                        <td><?=$result[3]?></td>
                        <td><?=$result[5]?></td>
                        <td>
                          <a href="update.php?id=<?= $result[0] ?>" class="button">Редагувати</a>
                          <a href="delete.php?id=<?= $result[0] ?>" class="button delete">Видалити</a>
                        </td>
                         </tr>
                        <?php
                    }
                    // Закриття з'єднання з базою даних
                    mysqli_close($connect);
                ?>
        </table>
     <h2>Додати новий товар</h2>
<form action="create.php" method="post" enctype="multipart/form-data">
    
  <label for="name">Назва:</label>
  <input type="text" id="name" name="name" required>
    
  <label for="price">Ціна:</label>
  <input type="text" id="price" name="price" required>
    
  <label for="description">Опис:</label>
  <textarea id="description" name="description" required></textarea>
    
  <label for="category">Категорія:</label>
  <input type="text" id="category" name="category" required>
    
  <label for="image">Фото:</label>
  <input type="file" id="image" name="image" accept="image/*">
    
  <button type="submit">Додати</button>
    
</form>

</main>
<script>

</script>
</body>
</html>
