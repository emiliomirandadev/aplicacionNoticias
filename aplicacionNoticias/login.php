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
        <script src="jq/code.jquery.com_jquery-latest.js"></script>
        <script src="jq/ajax.googleapis.com_ajax_libs_jquery_1.8.3_jquery.min.js"></script>
        <script>  function LoadComprobar() {
                var usuario = $('#usuario').val();
                var contrasenya = $('#contrasenya').val();
                $.ajax({// incio petición
                    type: "POST", //Cuando se haya enviado un formulario
                    url: "comprobar_login.php", //se invoca el archivo infoclientes.php
                    data: {nomusu: usuario, nomcon: contrasenya}													    //asigno el campo a la variable de peticion sql
                }).done(function (result) {												 //recibo el resulta
                    $("#demo").html(result);

                });
            }</script>
    </head>
    <body>
        <?php
        session_start();
        if (isset($_SESSION['usuario']))
            header('Location: noticias.php');
        ?>

        <div class="login">
            <p>
                <input type="text" name="usuario" required class="campo" placeholder="Usuario" id="usuario">
            </p>
            <p>
                <input type="password" name="contrasenya" required class="campo" placeholder="Contraseña" id="contrasenya">
            </p><input type="button" value="Enviar" class="boton" onclick="LoadComprobar()">

        </div>
        <div id="demo"></div>

        <?php
//        include 'funciones/funciones.php';
//        if (isset($_REQUEST['usuario']) && isset($_REQUEST['contrasenya'])) {
//            if (buscar_usuario($_REQUEST['usuario'], $_REQUEST['contrasenya'])) {
//                session_start();
//                $_SESSION['usuario'] = $_REQUEST['usuario'];
//                $_SESSION['clave'] = $_REQUEST['contrasenya'];   
//            } else {
//                print "<div class=\"usu_error\">El usuario o contraseña es incorrecto</div>";
//            }
//        }
        ?>

    </body>
</html>
