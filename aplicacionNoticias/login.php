<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <title>Inicio de sesión</title>
    </head>
    <body>


        <div class="login">
            <form method="POST" action="funciones/comprobar_login.php" >
                <p>
                    <input type="text" name="usuario" required class="campo" placeholder="Usuario">
                </p>
                <p>
                    <input type="password" name="contrasenya" required class="campo" placeholder="Contraseña">
                </p><input type="submit" value="Enviar" class="boton">
            </form>
        </div>

        <?php
        include 'funciones/funciones.php';
        if (isset($_REQUEST['usuario']) && isset($_REQUEST['contrasenya'])) {
            if (buscar_usuario($_REQUEST['usuario'], $_REQUEST['contrasenya'])) {
                session_start();
                $_SESSION['usuario'] = $_REQUEST['usuario'];
                $_SESSION['clave'] = $_REQUEST['contrasenya'];   
            } else {
                print "<div class=\"usu_error\">El usuario o contraseña es incorrecto</div>";
            }
        }
        ?>

    </body>
</html>
