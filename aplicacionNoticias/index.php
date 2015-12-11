<?php
if(!isset($_COOKIE['conexion_usuario'])){
    header('Location: login.php');
} else{
    
    header ('Location: noticias.php');
}
?>