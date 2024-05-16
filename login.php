<?php

$valid_username = "b231210053@sakarya.edu.tr";
$valid_password = "b231210053";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $valid_username && $password === $valid_password) {
    echo "Giriş başarılı. Hoş geldiniz, $username!";
} else {
    echo "Hatalı kullanıcı adı veya şifre!";
}
?>
