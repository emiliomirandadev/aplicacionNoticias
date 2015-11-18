<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


    include 'conexion.php';

    $con = conexion();
    $consulta = "select titular,autor from noticia";


    $resultado = $con->query($consulta);
    $r = array();
    echo "<table class='tabla_noticias' border='1'>";
    while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        foreach ($row as $key => $value) {

            echo "<td> $value </td> ";
        }

        echo "<td><form name='mod_noticia' action='' method='POST'> <input type='submit' name='a' value='Modificar'></form> <form name='borrar_noticia' action='borrar_noticia.php' method='POST'><input type='submit' value='borrar'></form></td>";
        echo "</tr>";
    }
    echo "</table>";

