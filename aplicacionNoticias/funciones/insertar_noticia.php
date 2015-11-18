<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'conexion.php';
$con=  conexion();
$titulo=$_POST['titular'];
$cuerpo=$_POST['cuerpo'];
$f_ini=$_POST['fecha_inicio'];
$f_fin=$_POST['fecha_final'];
$pendiente=$_POST['pendiente'];
$categoria=$_POST['categoria'];
$autor=$_COOKIE['conexion'];
$insertar ="insert into noticia (titular,cuerpo,fecha_i,fecha_f,autor,pendiente,categoria) values('$titulo','$cuerpo','$f_ini','$f_fin','$autor','$pendiente','$categoria')";

echo $insertar;
$resultado=$con->query($insertar);