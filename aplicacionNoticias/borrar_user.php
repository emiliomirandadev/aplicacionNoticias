<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'conexion.php';
$con=  conexion();
$id=$_POST['id_usuario'];
$consulta="delete from usuario where id_usuario=$id";
$resultado=$con->query($consulta);
if($resultado){
     echo "<div class=\"usu_corre\">Se ha borrado corretamente</div>";
}else{
     echo "<div class=\"usu_error\">Error</div>";
}

