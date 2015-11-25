<?php
include 'conexion.php';

$con = conexion();
$consulta = "select id_usuario,correo,nombre,apellido,grupo,curso from usuario";


$resultado = $con->query($consulta);
$r = array();
echo "<table class='tabla_noticias' border='1'>";


while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td> <button name='borrnoticia' class='boton' type='button' onclick='BorrarUsuario(".$row["id_usuario"].")'>Borrar</button></td>";
    echo "<td> <button name='modnoticia' class='boton' type='button' onclick='Moduser(".$row["id_usuario"].")'>Modificar</button></td>";
    echo "<td>" . $row['correo'] . "</td>";
    echo "<td>" . $row["nombre"] . "</td>";
   echo "<td>" . $row['apellido'] . "</td>";
    echo "<td>" . $row["grupo"] . "</td>";
    echo "<td>" . $row["curso"] . "</td>";
    echo "</tr>";
}

echo "</table>";

echo "<div id='demo'></div>";