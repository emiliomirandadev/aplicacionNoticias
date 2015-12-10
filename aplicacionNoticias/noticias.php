<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
header("Content-Type: text/html;charset=utf-8");
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
}
?>
<html>
    <head>       
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="ajax/funciones_ajax.js"></script>
        <script src="javascript/funciones_JS.js"></script>
        <script>
            cargarDiv();
            setInterval("cargarDiv()", 100);
        </script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" >
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <title>noticias actuales</title>
    </head>
    <body>

        <div class="noticia"  >
            <marquee direction="up" > 
                <div  id="noti" ></div>
            </marquee>

        </div>
        <div id="logo" >
            <a title="Configuracion" href="config.php"> <img src="imagenes/logoIESAguadulce.gif"></a>
        </div>


    </div>

</body>
</html>
