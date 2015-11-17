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
        <title>Inicio</title>
    </head>
    <body>
      
        <?php
        include ('noticias.php');
        if(isset($_COOKIE['conexion'])){
            volver();
        }
        ?>
    </body>
</html>