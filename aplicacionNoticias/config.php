<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <title>Usuarios</title>
    </head>
    <body>


        <?php
        include 'conexion.php';

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
        ?>
    </body>
</html>