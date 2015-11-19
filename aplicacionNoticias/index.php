<?php
if ((!isset($_COOKIE['conexion'])) || (is_null($_COOKIE['conexion']))) {
    header('Location: login.php');
} else
    header ('Location: noticias.php');
?>