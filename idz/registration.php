<?php
    session_start();
?>
<html lang="uk-ua">
    <head>
        <title>Реєстрація</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style/style_registration.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
        <link rel="icon" href="Images/favicon.png" type="image/x-icon">
    </head>
    <body>
        <header class="header">
            <div class="container">
                <div class="header_inner">
                    <nav class="nav">
                        <a class="nav_link" href="catalog.php">Каталог</a>
                        <a class="nav_link" href="idz1.php">Головна сторінка</a>
                    </nav>
                </div>
            </div>
        </header>

        <section class="section">
            <div class="container">
                <div class="section_header">
                    <h3 class="section_title">Реєстрація</h3>
                    <form class="form" action="signup.php" method="post">
                        <?php
                        if (isset($_SESSION['message'])) {
                          echo '<p class="msg" > '.$_SESSION['message'].' </p>';
                          unset($_SESSION['message']);
                        }
                        ?>
                        <p>01 / Контактна інформація</p>
                        <label for="surname">Прізвище</label>
                        <input type="text" placeholder="Ваше прізвище" name="surname" required>
                        <label for="name">Ім'я</label>
                        <input type="text" placeholder="Ваше ім'я" name="name" required>
                        <label for="phone">Номер телефону</label>
                        <input type="tel" pattern="\+38[0-9]{10}" placeholder="+3809601234567" name="phone" required>
                        <p>02 / Дані для входу</p>
                        <label for="email">Електронна пошта</label>
                        <input type="email" placeholder="yourmail@gmail.com" name="email" required>
                        <label for="password">Пароль</label>
                        <input type="password" placeholder="Введіть пароль" name="password" required>
                        <input type="password" placeholder="Введіть пароль ще раз" name="password-confirm" required>
                        <button type="submit" class="register_btn">Зареєструватися</button>
                    </form>
                </div>
            </div>
        </section>
        <footer>
      <div class="footer">
        <p>&copy; 2023 Licensed Software. All rights reserved.</p>
      </div>
    </footer>
    </body>
</html>