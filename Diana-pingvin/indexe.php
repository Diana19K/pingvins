<?php 
include "connect.php"; //выражение include включает и выполняет указанный файл 
//фильтрация
 
$query_get_category = "select * from categories"; 
 
$categories = mysqli_fetch_all(mysqli_query($con, $query_get_category)); 
 
include "header.php"; 
 
$news = mysqli_query($con, "select * from news"); 
 
$id_cat = isset($_GET['cat'])? $_GET['cat']:false; 
 
$query_newcat = ""; 
 
if($id_cat){ 
    $query_newcat = "SELECT * FROM news WHERE  category_id = '$id_cat'"; 
} else { 
    $query_newcat = "SELECT * FROM `news`"; 
} 
 
$result = mysqli_query($con,$query_newcat); 
 
?> 
 

<div id="main">
    <div class="last-news">       
    <div class="cards"> 
        <?php 
        if(mysqli_num_rows($result)==0){ 
            echo "нет новостей"; 
        }else { 
            while($new = mysqli_fetch_assoc($result)){ 
            echo "<div class='card'>"; 
            $new_id = $new['news_id']; 
            $new_date = $new['publish_date']; 
            echo "<img src='images/news/" . $new['image']. "'>"; 
            echo "<a href = 'oneNew.php?new=$new_id'>". $new['title']."</a>"; 
            echo  "</div>"; 
            } 
        } 
        ?> 
    </div>
    </div> 
</div>          
        
 
</body> 
</html>