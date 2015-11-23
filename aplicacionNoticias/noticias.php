<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
header("Content-Type: text/html;charset=utf-8");
$usuario = $_COOKIE['conexion_usuario'];
$grupo = $_COOKIE['conexion_grupo'];
//$self = $_SERVER['PHP_SELF']; //Obtenemos la página en la que nos encontramos
//header("refresh:10; url=$self");
//include ('funciones/listar_noticias.php');
?>
<html>
    <head>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script>
            function cargarDiv()
            {
                $.ajax({// incio petición
                    type: "POST", //Cuando se haya enviado un formulario
                    url: "listar_noticias.php", //se invoca el archivo infoclientes.php
                    //asigno el campo a la variable de peticion sql
                }).done(function (result) {												 //recibo el resulta
                    $("#noti").html(result);

                });

            }
            setInterval(cargarDiv(), 1);
        </script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <title>noticias actuales</title>
        <style>.move {-webkit-animation: anim2 ease-in-out 3s infinite alternate; }
            @-webkit-keyframes anim2
            {
                from {left: 0px;   -webkit-transform: scale(1.0) rotate(0deg)   }
                50%  {left: 250px; -webkit-transform: scale(0.8) rotate(10deg)  }
                to   {left: 500px; -webkit-transform: scale(1.2) rotate(-20deg) }
            }</style>

        <script language="javascript">
            function inicio() {
                window.location.href = "config.php";
            }
            function agregar_noticia() {
                window.location.href = "mod_noticia.php";
            }
        </script> 
    </head>
    <body>
        <div class="menu">

            Estas conectado como <?php echo $usuario; ?>
            <button onclick="window.location = 'login.php'">desconectarse </button>


        </div>
        <div class="titulo">Noticias </div>
        <div class="noticia">
            <marquee direction="up" scrolldelay="150">
                <div id="noti" >
                </div>
            </marquee>
        </div>



        <div name="editar_noti">
            <button class="boton" type="button" onclick="agregar_noticia()">Añadir noticia</button>

        </div>
        <div name="configuracion" <?php
        if ($grupo != "admin") {
            echo ' style="display: none;"';
        }
        ?>>
            <button class="boton" type="button" onclick="inicio()">Configuracion</button>

        </div>

        <div >
            <img src="imagenes/logoIESAguadulce.gif">
        </div>


    </div>
    <?php ?>
</body>
</html>