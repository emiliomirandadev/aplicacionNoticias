<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
$self = $_SERVER['PHP_SELF']; //Obtenemos la página en la que nos encontramos
header("refresh:10; url=$self");
include ('funciones/listar_noticias.php');
if (isset($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
} else {
    $usuario = "anonimo";
}



if ($usuario == "admin") {
    ?> 
    <script>
        div = document.getElementById('editar_user');

        div.style.display = '';
    </script>
    <?php
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <title>noticias actuales</title>
        <style>.move {-webkit-animation: anim2 ease-in-out 3s infinite alternate; }
            @-webkit-keyframes anim2
            {
                from {left: 0px;   -webkit-transform: scale(1.0) rotate(0deg)   }
                50%  {left: 250px; -webkit-transform: scale(0.8) rotate(10deg)  }
                to   {left: 500px; -webkit-transform: scale(1.2) rotate(-20deg) }
            }</style>
    </head>
    <body>
        <div class="menu">

            Estas conectado como <?php echo $usuario; ?>
            <button onclick="window.location = 'index.php'">desconectarse </button>


        </div>
        <div class="titulo">Noticias </div>

        <div class="noticia">
            <h2>noticia fresca</h2>
            <p>   El pasado miércoles 4 de noviembre se procedió a la defensa de la tesis doctoral "Reacciones Electroquímicas Modelo en la Interfaz Líquido Iónico-Electrodo Monocristalino de Platino" por parte de Andrea del Pilar Sandoval Rojas en la Universidad Nacional de Colombia. La tesis ha sido dirigida por los profesores Juan Miguel Feliu Martínez y Marco Fidel Suarez Herrera. <p>
            <p><?php echo mostrar_noticias() ?></p>
        </div>



        <div name="editar_user" <?php
        if ($usuario != "admin") {
            echo ' style="display: none;"';
        }
        ?>>
            <form name="editar_usuario" action="usuario.php" method="POST"> 

                <input type="submit" value="editar usuario " class="boton"> 
            </form>
        </div>   


        <div name="editar_noti">
            <form name="editar_noticia" action="mod_noticia.php" method="POST"> 
                <input type="submit" value="editar noticia" class="boton"> 
            </form>
        </div>
        <div name="configuracion">
            <form name="config" action="config.php" method="POST"> 
                <input type="submit" value="configuracion" class="boton"> 
            </form>
        </div>

        <div >
            <img src="imagenes/logoIESAguadulce.gif">
        </div>


    </div>
    <?php ?>
</body>
</html>