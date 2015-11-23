<!DOCTYPE html>
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
        <header id="cabecera_boton">
            <button class="boton" type="button" onclick="loadUsuario()">Usuarios</button>
            <button class="boton"  type="button" onclick="inicio()">Inicio</button>
            <button class="boton"  type="button" onclick="loadNoticia()">Noticias</button>
        </header>
        <h2>Configurar</h2>
        <div id="demo"></div>

    </body>
</html>