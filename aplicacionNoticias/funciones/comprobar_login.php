<?php

include ('conexion.php');
$con = conexion();
$consulta_usuario = "select * from usuario where correo =" . $_POST['usuario'] . "and passwd =" . $_POST['contrasenya'] . "";
 $resultado = $con->query($consulta_usuario);

if ( mysql_num_rows($resultado) == 1) {
    $datos_usuario = mysql_fetch_object($resultado);
    setcookie("login_guardado", $datos_usuario->correo, time() + (60 * 60 * 24 * 365));
}


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



