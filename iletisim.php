<?php
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$message = $_POST['message'];

echo "<h1>İletişim Bilgileri</h1>";
echo "<p>İsim: $name</p>";
echo "<p>E-mail: $email</p>";
echo "<p>Tarih: $date</p>";
echo "<p>Mesaj: $message</p>";
?>
