<?php      
    include "connect.php"; 
    include "header.php";
	$name = $_COOKIE['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<h1>Привет, <?= $name ?>!</h1>
	<a href="exit.php">Что бы выйти нажмите по ссылке.</a>

</body>
</html>