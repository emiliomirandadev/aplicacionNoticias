<?php
include 'conexion.php';

$con=  conexion();
$consulta="select * from usuario";

$resultado=  mysqli_query($con, $consula);

?>