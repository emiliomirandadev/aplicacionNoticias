<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'conexion.php';
$con=  conexion();


$id = $_GET['id'];

$borrar="delete from noticia where id=$id";
$resultado=$con->query($borrar);

  header('Location: config.php');