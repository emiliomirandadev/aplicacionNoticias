<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function mostrar_usuarios_mod() {
    include 'funciones/conexion.php';

    $con = conexion();
    $consulta = "select correo,nombre,apellido,telefono,grupo,curso from usuario";


    $resultado = $con->query($consulta);
    $r = array();
    echo "<table class='tabla_usuarios' border='1'>";
    while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        foreach ($row as $key => $value) {

            echo "<td> $value </td> ";
        }

        echo "<td><form name='mod_usuario' action='usuario.php' method='POST'> <input type='submit' name='a' value='Modificar'></form> <form name='borrar_usuario' action='borrar_usuario.php' method='POST'><input type='submit' value='borrar'></form></td>";
        echo "</tr>";
    }
    echo "</table>";
}
