<?php $categories = mysqli_fetch_all(mysqli_query($con, "select * from categories"));?>
<!DOCTYPE html> 
    <html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Пингвины</title>
        <link rel='stylesheet' type='text/css' media='screen' href='/css/style.css'> 

    </head> 
    <body> 

    <nav> 

    <div class="nav-header"> 
        <h2>Разделы</h2> 
        <div class="searcch-block"> 
             
        <input type="text" placeholder=" Поиск" class="poisk" > 
        </div> 
            
        <div class="vhod"> 
            
            <a href="admin/index.php">Вход</a> 
        </div> 
    </div> 
    <div class="text-name"> 
        <h1 class="namePost1">Пингвины</h1> 
        <h3>Понедельник, Январь 1, 2018</h3> 
        <div class="pogoda"> 
             
            <h3>-23°C</h3> 
        </div> 
    </div> 

    <main> 
        <div class="text-main"> 
            <?php foreach ($categories as $category){ 
                echo "<li><a href='#'>$category[1]</a></li>"; 
 
                } 
            ?> 
        </div> 
    </main>