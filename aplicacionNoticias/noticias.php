<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
header("Content-Type: text/html;charset=utf-8");
session_start();
if(!isset($_SESSION['usuario'])){
    header('Location: login.php');
}
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
            cargarDiv();
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

        <div class="titulo">Noticias </div>
        <div class="noticia"  >
            <div class="animacion" id="noti" ></div>
        </div>
        <div id="logo" >
            <a title="Configuracion" href="config.php"> <img src="imagenes/logoIESAguadulce.gif"></a>
        </div>


    </div>
    <?php ?>
</body>
</html>
