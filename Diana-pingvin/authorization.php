<?php      
    include "connect.php"; 
    include "header.php";
?> 
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<title>Вход/Регистрация</title>
<link rel='stylesheet' type='text/css' media='screen' href='/css/style.css'> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"      rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-4">
<h1>Форма авторизации</h1>
<form action="authorization-dobavlen.php" method="post">
	<input type="text" name="email" class="form-control" id="login" placeholder="Почта"><br>
	<input type="password" name="password" class="form-control" id="pass" placeholder="Пароль"><br>
	<button class="btn-btn-success">Авторизоваться</button><br>
</form> 
</div>
</body>
</html>