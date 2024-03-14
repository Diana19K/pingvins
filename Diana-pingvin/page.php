<?php      
    include "connect.php"; 
    include "header.php";
	$user_id = $_SESSION['user'];
	
  $user = mysqli_fetch_assoc(mysqli_query($con, "SELECT * from `users`where `user_id`=$user_id"));

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel='stylesheet' type='text/css' media='screen' href='/css/style.css'> 

</head>
<body>
	<div class="cabinet">
		<h1>Личный кабинет</h1>
		<form action="update.php" method="GET" class="form"> 
   <label for="email">Email:</label> 
   <input required type="text" name="email" value="<?php echo $user['email']; ?>"> 
   <br> 
   <label for="username">Имя:</label> 
   <input required type="text" name="username" value="<?php echo $user['username']; ?>"> 
   <br> 
   <button type="submit">Отправить</button> 
 </form>
	</div>
</body>
</html>