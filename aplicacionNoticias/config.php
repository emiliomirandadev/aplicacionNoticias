<!DOCTYPE html>
<?php
header("Content-Type: text/html;charset=utf-8");
session_start();
if(!isset($_SESSION['usuario'])){
    header('Location: login.php');
}

?>
<html>
    <head>
        <title>Configuracion</title>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <script type="text/javascript" src="javascript/funciones_JS.js"></script>
        <script language="javascript">
            function inicio() {
                window.location.href = "noticias.php";
            }
        </script> 
    </head>
    <body>
        <div class="menu">

            Estas conectado como <?php echo $_SESSION['usuario']; ?>
            <button onclick="window.location = 'login.php'">desconectarse </button>


        </div>
        <header id="cabecera_boton">
            <button class="boton" type="button" onclick="loadUsuario()">Usuarios</button>
            <button class="boton"  type="button" onclick="inicio()">Inicio</button>
            <button class="boton"  type="button" onclick="loadNoticia()">Noticias</button>
            <div name="configuracion" <?php
            if ($_SESSION['grupo'] != "admin") {
                echo ' style="display: none;"';
            }
            ?>>



            </div>


            <div name="editar_noti" <?php
            if ($_SESSION['grupo'] != "admin") {
                echo ' style="display: none;"';
            }
            ?>>
                <button class="boton" type="button" onclick="agregar_noticia()">Añadir noticia</button>

            </div>
        </header>

        <div id="demo"></div>

    </body>
</html>