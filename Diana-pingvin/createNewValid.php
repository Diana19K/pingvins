<?php
$rash = array('jpg', 'jpeg', 'png', 'svg');
$title = $_POST["title"];
$text = $_POST["text"];
$NewsCateg = $_POST["NewsCateg"];

if (empty($title)) {
    echo "Ошибка: Название новости не должно быть пустым.";
}

if (empty($text)) {
    echo "Ошибка: Текст новости не должен быть пустым.";
}

if (strlen($title) > 20) {
    echo "Ошибка: Название новости не должно превышать 20 символов.";
}
if (!is_string($title)) {
    echo "Ошибка: Название новости должно быть строкой.";
}

if (!is_string($text)) {
    echo "Ошибка: Текст новости должен быть строкой.";
}

if (!is_string($NewsCateg)) {
    echo "Ошибка: Категория новости должна быть строкой.";
}



$image = $_FILES['image'];
$destination = "images" . $image['name'];
$filename = $image["tmp_name"];
$check_upload = move_uploaded_file($filename, $destination);
 if (in_array(explode('.', $image['name'])[1], $rash)){
    echo "Изображение загружено!";
 } else {
    echo "Ошибка, вы не отправили изображение!";
 }
?>