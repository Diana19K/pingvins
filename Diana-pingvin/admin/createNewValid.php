<?php
// $rash = array('jpg', 'jpeg', 'png', 'svg');
// $title = $_POST["title"];
// $text = $_POST["text"];
// $NewsCateg = $_POST["NewsCateg"];

// if (empty($title)) {
//     echo "Ошибка: Название новости не должно быть пустым.";
// }

// if (empty($text)) {
//     echo "Ошибка: Текст новости не должен быть пустым.";
// }

// if (strlen($title) > 20) {
//     echo "Ошибка: Название новости не должно превышать 20 символов.";
// }
// if (!is_string($title)) {
//     echo "Ошибка: Название новости должно быть строкой.";
// }

// if (!is_string($text)) {
//     echo "Ошибка: Текст новости должен быть строкой.";
// }

// if (!is_string($NewsCateg)) {
//     echo "Ошибка: Категория новости должна быть строкой.";
// }

// $image = $_FILES['image'];
// $destination = "images" . $image['name'];
// $filename = $image["tmp_name"];
// $check_upload = move_uploaded_file($filename, $destination);
//  if (in_array(explode('.', $image['name'])[1], $rash)){
//     echo "Изображение загружено!";
//  } else {
//     echo "Ошибка, вы не отправили изображение!";
//  }

include "../connect.php"; // выражение include включает и выполняет указанный файл  
  //   $query = "INSERT INTO `news`(image, title, content, category_id) VALUES ('news1.png','Пингвинчики','Миленькие пингвинята',1)"; 
  // // Выполнение запроса 
  //    $result = mysqli_query($con, $query);
  //    var_dump($result);



      $title = isset($_POST['newTitle'])?$_POST['newTitle']:false;
      $text = isset($_POST['newsText'])?$_POST['newsText']:false;
      $file = isset($_FILES['newsImg']["tmp_name"])?$_FILES['newsImg']: false;
      $category_id = isset($_POST[ 'newsCat' ])?$_POST[ 'newsCat']: false;

function check_error($error)
{
  return "<script> alert('$error'); location.href = '/admin'; </script>";
}



if($title and $file and $category_id){
    if (strlen($title) > 50) 
          echo check_error("Название не должно превышать 50 символов!");
    else{
        $file_name = $file["name"];
        $result = mysqli_query($con, "INSERT INTO news (title, content, image, category_id) VALUES ('$title','$text', '$file_name',$category_id)");

        if ($result){
            move_uploaded_file($file["tmp_name"], "images/news/$file_name");
            echo check_error("Новость успешно создана");
        } else 
            echo check_error("Произошла ошибка: ".mysqli_error($con));
    }
} else {
  echo check_error("Все поля должны быть заполнены!");
}
?>