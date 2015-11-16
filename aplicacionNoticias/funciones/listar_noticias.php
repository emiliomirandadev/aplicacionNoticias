<?php

include ('conexion.php');

function mostrar_noticias() {
    $con = conexion();
    $lista = array();
    $consulta = 'select * from noticia';
    $resultado = $con->query($consulta);


    while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
        $lista = $row['titular'] . " " . $row['cuerpo'];
    }
    return $lista;
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

