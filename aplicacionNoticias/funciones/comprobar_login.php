<?php

include ('funciones.php');
$usuario = $_POST['usuario'];
$pass = $_POST['contrasenya'];

$con = conexion();
/* La busqueda en la base de datos se realiza de este modo para evitar las inyecciones sql */
$query = ("SELECT correo, passwd FROM usuario  WHERE correo = '$nombre' and passwd='$pass'");
$resultado = $con->query($query);
$nr = $resultado->rowCount();

if ($nr == 1) {
   echo "es correcto";
    session_start();
    $_SESSION['usuario'] = $_REQUEST['usuario'];
    $_SESSION['clave'] = $_REQUEST['contrasenya'];
   // setcookie("conexion", $usuario, time() + 3600, "/");
    // volver();
} else if ($nr == 0) {
   echo "No es correcto";
}











