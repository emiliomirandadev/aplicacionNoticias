<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'conexion.php';
if(isset($_POST['cerr'])){
    cerrar_session();
}
function buscar_usuario($nombre, $pass) {
    $con = conexion();
    /* La busqueda en la base de datos se realiza de este modo para evitar las inyecciones sql */
    $query = ("SELECT correo, passwd FROM usuario  WHERE correo = '$nombre' and passwd='$pass'");
    $resultado = $con->query($query);
    $nr = $resultado->rowCount();

    if ($nr == 1) {
        return true;
    } else if ($nr == 0) {
        return false;
    }
}

function cerrar_sesion() {
    session_destroy();
    header('Location: login.php');
}

function estableceSesion(){
    session_start();
    $_SESSION['usuario'] = $_COOKIE["conexion_usuario"];
    $_SESSION['grupo'] = $_COOKIE["conexion_grupo"];
}