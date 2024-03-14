<?php  
session_start();
include "connect.php";  
$email = $_GET['email']; 
$username =$_GET['username']; 
$user_id = $_SESSION['user']; 
$queryUserCheck = mysqli_query($con,"UPDATE `users` SET `username`='$username',`email`='$email' WHERE user_id = $user_id");  
echo "<script> 
alert(\"Данные успешно обновлены\");  
location.href='page.php'; 
</script>"; 
?>