<?php

    $connect = mysqli_connect('127.0.0.1:3300', 'root', '', 'card-shop');
    if (!$connect) {
        die('Ошибка подкл к бд');
    }
?>