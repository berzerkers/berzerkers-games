<?php

    require 'DB.php';
    session_start();

    $user = $_POST[''];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

    $sql = "SELECT COUNT(*) as contar FROM users WHERE mail = '$mail' AND pass = '$pass'";

    $result = mysqli_query($conn, $sql);
    $array = mysqli_fetch_array($result);

    if ($array['contar']>0) {
        $_SESSION['name_user'] = $user;
        header("location: ../pagprin.html");
    } else {
        echo "DATOS INCORRECTOS";
    }
?>
