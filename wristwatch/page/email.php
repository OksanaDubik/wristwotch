<?php
include 'auth.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

echo "наши новости мы будем отправлять на ваш электронный адрес: <p style='color:red;'>" . $address . "</p>"
?>
<br>
<a href="/?logout">ВЫХОД</a>
<br>
<a href="/index.php">Главная </a>
</body>
</html>

