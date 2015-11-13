<?php

include 'conexion.php';

$con = conexion();
$consulta = "select correo,nombre,apellido,telefono,grupo,curso from usuario";


$resultado = $con->query($consulta);
$r = array();
echo "<table border='1'>";
while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    foreach ($row as $key => $value) {

        echo "<td> $value </td> ";
    }
    echo "<td> <button value='Modificar'></button> <button value='editar'></button></td>";
    echo "</tr>";
}
echo "</table>";
?>