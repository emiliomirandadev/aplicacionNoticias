<?php

include ('conexion.php');
include ('funciones.php');
$con = conexion();
$usuario = $_POST['usuario'];
$pass = $_POST['contrasenya'];

$consulta_usuario = "select * from usuario where correo ='$usuario' and passwd ='$pass'";
$resultado = $con->query($consulta_usuario);
$num_rows = $resultado->fetchColumn();
if ($num_rows == 1) {
    $datos_usuario = mysql_fetch_object($resultado);
    setcookie("login_guardado", $datos_usuario->correo, 360);
    setcookie("nombre", "prueba", 360);
}

volver();

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



