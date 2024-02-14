<?php      
include "../connect.php"; // выражение include включает и выполняет указанный файл 

$id = isset($_POST['id'])?$_POST['id']:false;
$title = isset($_POST['newTitle'])?$_POST['newTitle']:false;
$text = isset($_POST['newsText'])?$_POST['newsText']:false;
$file = ($_FILES['newsImg']["size"] !=0)?$_FILES['newsImg']: false;
$category_id = isset($_POST[ 'newsCat' ])?$_POST[ 'newsCat']: false;

function check_error($error, $id)
{
  return "<script> alert('$error'); location.href = '/admin?new=$id'; </script>";
}

$new_info = mysqli_fetch_assoc(mysqli_query($con, "SELECT * from `news` where news_id = $id"));

$query_update = "UPDATE `news` set ";

$chesk_update = false;

if($new_info["title"]!=$title)
{
    $query_update.= "title ='$title', ";
    $chesk_update = true;

}
if($new_info["content"]!=$text) 
{
    $query_update.= "content ='$text', ";
    $chesk_update = true;
}
if($new_info["category_id"]!=$category_id) 
{
    $query_update.= "category_id ='$category_id', ";
    $chesk_update = true;
}
if($file){ 
    $query_update.= "image = '".$file["name"] ."', ";
    move_uploaded_file($file["tmp_name"], "../images/news/".$file["name"]);
    $chesk_update = true;
}
if($chesk_update){
    $query_update = substr($query_update, 0,-2);
    $query_update .= "WHERE news_id = $id";

    $result = mysqli_query($con, $query_update);
    var_dump($query_update);
    if($result) echo check_error("Данные обновлены!",$id);
    else echo check_error("Ошибка обновления!". mysqli_error($con),$id);
}
else{
    echo check_error("Данные актуальны!",$id);
}
?>