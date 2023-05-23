<?php
session_start();
require_once 'connect.php';
?>

<html lang="uk-ua">
<head>
    <title>Title</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style_catalog.css">
    <link rel="icon" href="Images/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header" id="header">
        <div class="container">
            <div class="header_inner">
                <nav class="nav">
                    <a class="nav_link" href="idz1.php">головна</a>
                </nav>
            </div>
        </div>
    </header>
    <div class="item search">
        <div class="search_container">
            <p>Пошук: </p>
            <form action="">
                <input type="text">
                <img src="Images/search.png" alt="">
            </form>
        </div>
    </div>
    <div class="sidebar">
        <nav class="sidebar_nav">
            <ul class="sidebar_list">
                <?php
                $categoriesSql = "SELECT DISTINCT category FROM products";
                $categoriesResult = mysqli_query($connect, $categoriesSql);

                if (mysqli_num_rows($categoriesResult) > 0) {
                    while ($categoryRow = mysqli_fetch_assoc($categoriesResult)) {
                        $categoryName = $categoryRow['category'];
                        $categoryUrl = "catalog.php?category=" . urlencode($categoryName);
                        $activeClass = (isset($_GET['category']) && $_GET['category'] == $categoryName) ? 'active' : '';
                        echo "<li class='sidebar_item $activeClass'><a href='$categoryUrl'>$categoryName</a></li>";
                    }
                }

                mysqli_free_result($categoriesResult);
                ?>
            </ul>
        </nav>
    </div>
    
    <div class="content">
        <?php
        $category = isset($_GET['category']) ? $_GET['category'] : null;

        $sql = "SELECT * FROM products";
        if (!empty($category)) {
            $sql .= " WHERE category = '$category'";
        }

        $result = mysqli_query($connect, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            echo "<div class='product-list'>";

            while ($row = mysqli_fetch_assoc($result)) {
                $productId = $row['id'];
                $productName = $row['name'];
                $productPrice = $row['price'];
                $productImage = $row['image'];
                $productDescription = $row['description'];

                echo "<div class='product'>";
                echo "<img src='Images/$productImage' alt='$productName'>";
                echo "<div class='product_content'>";
                echo "<h3 class='product_title'>$productName</h3>";
                echo "<p class='product_description'>$productDescription</p>";
                echo "<p class='product_price'>Price: $productPrice</p>";
                echo "</div>";
                echo "</div>";
            }

            echo "</div>";
        } else {
            echo "No products available.";
        }

        mysqli_free_result($result);
        mysqli_close($connect);
        ?>
    </div>

    <div class="footer">
        <p>&copy; 2023 Licensed Software. All rights reserved.</p>
    </div>
</body>
</html>
