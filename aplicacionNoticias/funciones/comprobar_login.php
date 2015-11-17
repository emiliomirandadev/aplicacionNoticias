<?php

include ('funciones.php');
$usuario = $_POST['usuario'];
$pass = $_POST['contrasenya'];


$res = buscar_usuario($usuario, $pass);
echo $res;
if ($res == true) {
    echo $usuario;
    echo $pass;

    setcookie("conexion", $usuario, time() + 3600, "/");
   // volver();
}else{
     //header('Location: ../login.php');
}






