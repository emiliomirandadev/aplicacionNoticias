<html>
    <?php $r = "no se ha seleccionado consulta"; ?>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <title>Usuarios</title>
    </head>
    <body>
        <?php include 'funciones/listar_usuarios_modificar.php' ?>
        <header class="cabecera_config">

            <input class="boton" type="button" value="Usuarios" onclick="<?php $r = mostrar_usuarios_mod() ?>">
            <input class="boton" type="button" value="Noticias">
        </header>

        <?php
        echo $r;
        ?>
    </body>
</html>