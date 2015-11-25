<?php

include 'conexion.php';
$con=  conexion();
$correo=$_POST['correo'];
$pass=$_POST['pass'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$grupo=$_POST['grupo'];
$curso=$_POST['curso'];
$pass_cifrado=  md5($pass);
$insertar ="insert into usuario (correo,passwd,nombre,apellido,telefono,grupo,curso) values('$correo','$pass_cifrado','$nombre','$apellido','$telefono','$grupo','$curso')";

$resultado=$con->query($insertar);
header('Location: mod_usuario.html');