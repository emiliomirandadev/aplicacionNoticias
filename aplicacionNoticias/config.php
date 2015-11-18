<html>
    <?php $r = "no se ha seleccionado consulta"; ?>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <title>Usuarios</title>


    </style>

    <!-- Referencias a Javascripts externos -->

    <script src="http://www.google.com/jsapi"></script>
    <script>google.load("jquery", "1");</script>

    <!-- Código Javascript interno -->

    <script type='text/javascript'>

        /* Código a ejecutarse tan pronto como la
         página ha sido cargada por el navegador */

        $(document).ready(function ()
        {
            /* Asociar el evento de clic del botón 'igual'
             con la lógica del negocio de la aplicación */

            $('#igual').click(function ()
            {
                procesar();
            });
        });

        function procesar()
        {
            $.ajax({
                url: 'funciones.php', /* URL a invocar asíncronamente */
                type: 'post', /* Método utilizado para el requerimiento */
                data: $('#formulario').serialize(), /* Información local a enviarse con el requerimiento */


            }
            success: 	function(request, settings)
				{
					/* Cambiar el color del texto a verde */
					
					$('#mensaje').css('color', '#0ab53a');
					
					/* Mostrar un mensaje informando el éxito sucedido */
					
					$('#mensaje').html("Operación realizada exitosamente");
					
					/* Mostrar el resultado obtenido del cálculo solicitado */
					
					$('#resultado').html(request);
				},
        }
        

    </script>

</head>
<body>
    <?php include 'funciones/listar_usuarios_modificar.php' ?>
    <header class="cabecera_config">


        <form name="a" action="#" method="post">
            <input type='button' id="igual" value='Usuarios' />
        </form>
        <input class="boton" type="button" value="Noticias">
    </header>
    <span id='resultado'>&nbsp;</span>
    <?php
    echo $r;
    ?>
</body>
</html>