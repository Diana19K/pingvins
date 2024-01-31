<?php      
    include "connect.php"; // выражение include включает и выполняет указанный файл 
    

    // $query_get_category = ; 

    // $categories = mysqli_fetch_all(mysqli_query($con, "select * from categories")); //получение результата запроса из переменной query_get_category 
    //и преобразуем его в двумерный массив, где каждый элемент это массив с построчным получением кортежей из таблицы результата запроса 

    $news = mysqli_query($con, "select * from news");
    include "header.php";
    ?> 

    

    <div id="main">
    <div class="last-news">
    <?php 
        while($new = mysqli_fetch_assoc($news)){ 
            echo "<div class='card'>"; 
            $new_id=$new['news_id'];
            echo "<img src='images/news/".$new['image']."'>";
            echo "<h2 class='c_title'>" . $new['title'] . "</h2>"; 
            echo"<a href='oneNew.php?new=$new_id'>" . $new['title'] . "</a>";
            // echo "<p>" . $new['content'] . "</p>"; 
            echo "</div>"; 
        } 
    ?> 
</div>
    </div>


    </body> 
</html>
