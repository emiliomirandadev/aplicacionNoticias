<?php
header("Content-Type: text/html;charset=utf-8");
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <title>Administracion de noticias</title>
        <script language="javascript" src="WYSIWYG/source.js" type="text/javascript"></script>

        <script language="javascript">
            function inicio() {
                window.location.href = "noticias.php";
            }
            function configuracion() {
                window.location.href = "config.php";
            }
        </script> 
    </head>
    <body>
        <div class="menu"></div>
        <div class="titulo">Administración de noticias </div>
        <div class="editar_noticia">
            <fieldset class="edita_noticia">
                <legend> Actualiza noticia</legend>
                <form name="edit" action="insertar_noticia.php" method="POST"> 
                    Titular<input type="text" name="titular">
                    Cuerpo<textarea rows="30" cols="130" name="cuerpo"></textarea><br><br>
                    Fecha inicio<input type="date" name="fecha_inicio"><br>
                    Fecha final<input type="date" name="fecha_final"><br>
                    <br>
                    <div name="configuracion" <?php
if ($_SESSION['grupo'] != "admin" && $_SESSION['grupo'] != "profesor") {
    echo ' style="display: none;"';
}
?>>
                        Pendiente <input type="checkbox" name="pendiente" value=true checked><br>

                    </div>                
                    Selecciona el grupo al que pertenece
                    <select name="categoria">
                        <option name="alumnos">Alumno
                        </option>
                        <option name="profesor">Profesor
                        </option>
                    </select>
                    <input type="submit" value="actualizar"> 

                </form>
            </fieldset>
        </div>
        <div name="editar_noti">
            <button class="boton" type="button" onclick="inicio()">Inicio</button>


        </div>
        <?php
        ?>
    </body>
</html>
