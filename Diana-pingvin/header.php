<?php $query_get_category = "select * from categories";  
$categories = mysqli_fetch_all(mysqli_query($con, $query_get_category));  
session_start(); 
$username = isset($_SESSION["user"]) ? mysqli_fetch_assoc(mysqli_query($con, 'select username from users where user_id =' . $_SESSION["user"]))["username"] : false;?>
<!DOCTYPE html> 
    <html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Пингвины</title>
        <link rel='stylesheet' type='text/css' media='screen' href='/css/style.css'> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>   


    </head> 
    <body> 

    <nav> 

    <div class="nav-header"> 
        <h2>Разделы</h2> 
        <div class="searcch-block"> 
             
        <input type="text" id="searchInput" placeholder="Поиск..."> 
    <button type="button" onclick="searchNews()">Искать</button>  
        </div> 
            
        <div class="vhod"> 
            <?php if(!isset($_SESSION["user"])) {?>
                <a href="authorization.php">Вход</a> / <a href="registration.php">Регистрация</a> / 
           <?php } else{ ?>
                <a href="signoun.php">Выход</a> /
         <?php  } ?>
            <a href="admin/">Админ панель</a>
        </div> 
    </div> 
    <div class="text-name"> 
        <h1 class="namePost1"><a href="index.php">Пингвины</a></h1> 
        <h3>Понедельник, Январь 1, 2018</h3> 
        <div class="pogoda"> 
             
            <h3>-23°C</h3> 
        </div> 
    </div> 

    <main> 
        <div class="text-main"> 
            <?php 
            foreach ($categories as $category) { 
                $cat_id = $category[0]; 
                echo "<li><a href = '/?cat=$category[0]'>$category[1]</a></li>"; 
            }
            ?> 
        </div> 
    </main>