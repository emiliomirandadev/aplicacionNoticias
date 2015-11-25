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
        <script type="text/javascript" src="ajax/funciones_ajax.js"></script>
        <script src="jq/code.jquery.com_jquery-latest.js"></script>
        <script src="jq/ajax.googleapis.com_ajax_libs_jquery_1.8.3_jquery.min.js"></script>
        <script language="javascript">
            function inicio() {
                window.location.href = "noticias.php";
            }
            function agregar_noticia() {
                window.location.href = "mod_noticia.php";
            }
            function agregar_usuario() {
                window.location.href = "mod_usuario.html";
            }
            function cerrar_sesion() {
                <?php
                session_destroy();
                ?>
                window.location = 'login.php'
            }
        </script> 
    </head>
    <body>
        <div class="menu">

            Estas conectado como <?php echo $_SESSION['usuario']; ?>
            <button onclick="cerrar_sesion()">desconectarse </button>


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
                <button class="boton" type="button" onclick="agregar_usuario()">Añadir usuario</button>

            </div>

        </header>

        <div id="demo"></div>

    </body>
</html>
