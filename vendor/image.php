<?php 

require_once("./config/connect.php");

$id = $_GET['id']; // Параметр id из URL

$sql = "SELECT images FROM card-shop WHERE id = $id";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    header("Content-type: image/jpeg"); // Установка типа содержимого
    echo $row['card-shop']; // Вывод изображения
} else {
    echo "Image not found";
}

?>