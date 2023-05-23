<?php
session_start();
if (isset($_SESSION['login'])) {
    setcookie(session_name(), session_id(), time() + 60 );
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Licensed Software</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="Images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="style/style.css">
</head>
<body>

    <div class="popup_form" id="login_form">
  <form class="form_container" action="signin.php" method="post">
    <label for="email">Логін</label>
    <button class="login_close" onclick="closeForm('login_form')"><img src="login_close.png" width="20px"></button>
    <input type="email" placeholder="Ваша електронна пошта" name="email" required>
    <label for="password">Пароль</label>
    <input type="password" placeholder="Ваш пароль" name="password" required>
    <button type="submit" class="login_btn">Увійти</button>
    <p>або</p>
    <a href="registration.php" ta>Зареєструватися</a>
  </form>
</div>

  <div class="profile_form" id="profile_form">
    <form class="form_container_profile" action="" method="">
      <label for="email">Ваш профіль</label>
      <h2><?=$_SESSION['login']?></h2>
      <?php if ($_SESSION['login'] == 'nazer@gmail.com'): ?>
        <a href="admin.php">Адмін-панель</a>
      <?php endif; ?>
      <button onclick="logout()">Вийти</button>
    </form>
  </div>

  <header>
    <div id="logo" onclick="slowScroll('#top')">
      <span>Logo</span>
    </div>
  <div class="login" <?php if (isset($_SESSION['login'])) echo 'style="display:none;"' ?>>
    <a href="#login_form" onclick="openForm('login_form')"><img src="login.png" alt="login"></a>
  </div>
  <div class="login" <?php if (!isset($_SESSION['login'])) echo 'style="display:none;"' ?>>
    <a href="#profile_form" onclick="openForm('profile_form')"><img src="login.png" alt="profile"></a>
  </div>
    <div id="about">
        <a href="catalog.php"title="Каталог">Каталог</a>
      <a href="#" title="Можливості" onclick="slowScroll('#main')">Можливості</a>
      <a href="#" onclick="slowScroll('#overview')" title="Переваги">Переваги</a>
      <a href="#" onclick="slowScroll('#contacts')" title="Контакти">Контакти</a>
      <a href="#" onclick="slowScroll('#faq')" title="Ответы на вопросы">FAQ</a>
    </div>
  </header>
  <div id="top">
    <h1>ПРОДАЄМО ЛІЦЕНЗІЙНЕ ПРОГРАМНЕ ЗАБЕЗПЕЧЕННЯ</h1>
    <h3>Підберемо відповідно до ваших потреб, встановимо та налаштуємо для вас легальні ліцензійні програми: операційні системи, офісні та графічні пакети, бухгалтерію, антивірусне та інше ПЗ.</h3>
 <h3>Ви займаєтеся бізнесом — ми турбуємося, щоб вам ніщо не заважало.</h3>
  </div>
    
  <div id="main">
    <div class="intro">
      <h2>Наші послуги допоможуть вам!</h2>
      <span>Большой выбор всего, что может вам пригодиться</span>
    </div>
    <div class="text">
      <span>Використання легального ліцензійного ПЗ — гарантія стабільної роботи бізнесу. Це високий рівень безпеки завдяки постійним оновленням, запорука відсутності претензій від будь-яких перевірчих органів.</span>
    </div>
       <div class="text">
      <span>Використання легального ліцензійного ПЗ — гарантія стабільної роботи бізнесу. Це високий рівень безпеки завдяки постійним оновленням, запорука відсутності претензій від будь-яких перевірчих органів.</span>
        <li><h4>підбір програмного забезпечення під потреби клієнта</h4></li>
           <li><h4>легальне ПЗ для робочих станцій та серверів від наших партнерів: Google, Microsoft, ESET, OneBox та інших</h4></li>
            <li><h4>продаж та встановлення ліцензійного Windows, офісу Microsoft 365, графічних пакетів Adobe, антивірусів, бухгалтерських програм, CRM тощо</h4></li>
           <li><h4> підбір, продаж та налаштування комплексних програмних продуктів для безпеки компанії.</h4></li>
    </div>
  </div>
    
  <div id="overview">
    <h2>Переваги</h2>
    <h4>з нами все простіше</h4>
    <div class="img">
      <img src="https://citcoms.nu.ac.th/wp-content/uploads/2021/12/MS-Office.png" alt="" width="200" height="300">
      <span>MS Office</span>
    </div>
    <div class="img">
      <img src="https://www.redmosquito.co.uk/wp-content/uploads/2020/08/azure-logo.png" alt="" width="200" height="300">
      <span>MS Azure</span>
    </div>
      <div class="img">
      <img src="https://www.adobe.com/content/dam/offers-homepage/us/en/homepage/twitter_adobe.png" alt="" width="200" height="300">
      <span>Adobe</span>
    </div>
      <div class="img">
      <img src="https://blogs.windows.com/wp-content/uploads/prod/sites/44/2020/08/windows-logo-social.png" alt="" width="200" height="300">
      <span>OS Windows</span>
    </div>
  </div>

  <div id="contacts">
    <center><h5>Зворотній зв'язок</h5></center>
    <form id="form_input">
      <label for="name">Ім'я <span>*</span></label><br>
      <input type="text" placeholder="Введіть ваше ім'я" name="name" id="name"><br>
      <label for="email">Ваша пошта <span>*</span></label><br>
			<input type="email" placeholder="Введіть email" name="email" id="email"><br>
			<label for="message">Повідомлення <span>*</span></label><br>
			<textarea placeholder="Введите ваше повідомлення" name="message" id="message"></textarea><br>
			<div id="mess_send" class="btn">Відправити</div>
    </form>
  </div>

  <div id="faq">
    <div>
      <span class="title">Оплата</span><br>
      <span class="heading">Як буде проходити оплата?</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
      <span class="heading">Як буде проходити оплата?</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
      <span class="heading">Як буде проходити оплата?</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
    </div>
    <div>
      <span class="title">Інформація</span><br>
      <span class="heading">Що входить до послуг сервісу</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
      <span class="heading">Що входить до послуг сервісу</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
      <span class="heading">Що входить до послуг сервісу</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
    </div>
    <div>
      <span class="title">Гарантія</span><br>
      <span class="heading">Які гарантії є</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
      <span class="heading">Які гарантії є</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
      <span class="heading">Які гарантії є</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
    </div>
  </div>
    <footer>
      <div class="footer">
        <p>&copy; 2023 Licensed Software. All rights reserved.</p>
      </div>
    </footer>
  <!-- Scripts -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    function slowScroll(id) {
      $('html, body').animate({
        scrollTop: $(id).offset().top
      }, 500);
    }

    $(document).on("scroll", function () {
      if($(window).scrollTop() === 0)
        $("header").removeClass("fixed");
      else
        $("header").attr("class", "fixed");
    });
      
 function openForm(formId) {
    document.getElementById(formId).style.display = "block";
    document.body.style.overflow = "hidden";
}

function closeForm(formId) {
    document.getElementById(formId).style.display = "none";
    document.body.style.overflow = "visible";
}

function showSuccessMessage() {
    var messageElement = document.createElement('div');
    messageElement.innerHTML = 'Ви успішно авторизувалися!';
    messageElement.style.position = 'fixed';
    messageElement.style.top = '50%';
    messageElement.style.left = '50%';
    messageElement.style.transform = 'translate(-50%, -50%)';
    messageElement.style.background = 'white';
    messageElement.style.border = '1px solid black';
    messageElement.style.padding = '20px';
    messageElement.style.zIndex = '100';
    document.body.appendChild(messageElement);
    setTimeout(function() {
        messageElement.remove();
    }, 3000);
}

function showProfile() {
    var profileElement = document.createElement('div');
    profileElement.classList.add('login');
    profileElement.innerHTML = '<a href="#profile_form" onclick="openForm(\'profile_form\')"><img src="profile.png" alt="profile"></a>';
    var loginElement = document.querySelector('.login');
    loginElement.replaceWith(profileElement);
}

function hideProfile() {
    var profileElement = document.querySelector('.login');
    profileElement.remove();
    var loginElement = document.createElement('div');
    loginElement.classList.add('login');
    loginElement.innerHTML = '<a href="#login_form" onclick="openForm(\'login_form\')"><img src="login.png" alt="login"></a>';
    document.querySelector('header').appendChild(loginElement);
}

function logout() {
    // очищаем сессию и удаляем cookie
    <?php unset($_SESSION['login']); ?>
    document.cookie = '<?php echo session_name(); ?>=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/;';
    location.reload();
}

window.addEventListener('DOMContentLoaded', function() {
    // скрываем форму профиля при загрузке страницы
    document.getElementById('profile_form').style.display = "none";
    
    // закрываем форму авторизации/регистрации при переходе на другую страницу
    window.addEventListener('hashchange', function() {
        document.getElementById('login_form').style.display = "none";
        document.getElementById('profile_form').style.display = "none";
        document.body.style.overflow = "visible";
    });
    
    // закрываем форму профиля при клике на логотип
    document.getElementById('logo').addEventListener('click', function() {
        document.getElementById('profile_form').style.display = "none";
        document.getElementById('login_form').style.display = "none";
        document.body.style.overflow = "visible";
    });
    
    // обрабатываем успешную авторизацию
    var successMessage = "<?php echo isset($_SESSION['signin']) && $_SESSION['signin'] == 'success' ? 'true' : 'false'; ?>";
    if (successMessage == 'true') {
        showSuccessMessage();
        showProfile();
        hideProfile();
        <?php unset($_SESSION['signin']); ?>
    }
});
      
  </script>
  <script src="app.js"></script>
</body>
</html>
