<?php

include ('funciones.php');
$usuario = $_POST['usuario'];
$pass = $_POST['contrasenya'];



    setcookie("conexion", $usuario, time() + 3600, "/");
    volver();







