<?php
session_start();
require_once 'connect.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordconfirm = $_POST['password-confirm'];
$pass=md5($password);
if($password==$passwordconfirm){
    mysqli_query($connect,query: "INSERT INTO `Users`(`login`, `password`, `FirstName`, `LastName`, `phone_number`) VALUES ('$email','$pass','$name','$surname','$phone')");
    header('Location:/idz1.php');
}
else{
    $_SESSION['message']='Паролі не співпадають';
    header('Location:/registration.php');
}
?>