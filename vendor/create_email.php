<?php
    require_once("../config/connect.php");

    $email = $_POST['email'];
    mysqli_query($connect, "INSERT INTO `user_email`(`id`, `email_user`) VALUES (NULL,'$email')"); 
    header("location: /");
?>