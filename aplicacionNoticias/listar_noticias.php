<?php

session_start();
if (isset($_SESSION['grupo'])) {
    $grupo = $_SESSION['grupo'];
    if ($grupo == "profesores") {
        $consulta = "select * from noticia where categoria Like 'profesores'";
    } else if ($grupo == "alumnos") {
         $consulta = "select * from noticia where categoria Like 'alumnos'";
    } else if ($grupo == "admin") {
         $consulta = "select * from noticia";
    }
}
include ('conexion.php');


header("Content-Type: text/html;charset=utf-8");
$con = conexion();
mysql_query("SET NAMES 'utf8'");
$lista = array();

$resultado = $con->query($consulta);


while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
    echo "<h1>" . $row['titular'] . "</h1>" . "<br> " . $row['cuerpo'] . "<br>";
}
 



