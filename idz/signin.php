<?php
session_start();
require_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $check_user = mysqli_query($connect, "SELECT * FROM `Users` WHERE `login`='$email' AND `password`='$password'");

  if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['login'] = $user['login'];
    $_SESSION['signin'] = 'Ви авторизувалися';
    header('Location: /idz1.php');
    exit();
  } else {
    $_SESSION['signin'] = 'Не вірний логін або пароль';
    header('Location: /idz1.php');
    exit();
  }
}
?>