<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>
    <body>
        <header id="cabecera_config">
            <button type="button" onclick="loadUsuario()">Usuarios</button>
            <button type="button" onclick="loadNoticia()">Noticias</button>
        </header>
        <h2>Configurar</h2>
        <div id="demo"></div>
        <script>
            function loadUsuario() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState === 4 && xhttp.status === 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "funciones/listar_usuarios_modificar.php", true);
                xhttp.send();
            }
            function loadNoticia() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState === 4 && xhttp.status === 200) {
                        document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "funciones/listar_noticias_modificar.php", true);
                xhttp.send();
            }
        </script>
    </body>
</html>