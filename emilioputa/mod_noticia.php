<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <title>actualizar noticia</title>
        <script language="javascript" src="WYSIWYG/source.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="menu"></div>
       <div class="titulo">Noticias </div>
        <div class="editar_noticia">
            <fieldset class="edita_noticia">
                <legend> Actualiza noticia</legend>
           <form name="edit" action="funciones.php" method="POST"> 
               titular<input type="text" name="titular">   autor<input type="text" name="autor">
              Cuerpo<textarea rows="30" cols="130" name="cuerpo"></textarea><br>
               fecha inicio<input type="date" name="fecha_inicio"><br>
             fecha final<input type="date" name="fecha_final"><br>
           <br>
               pendiente <input type="checkbox" name="pendiente"><br>
               Selecciona grupo al que pertenece
               <select name="categoria">
                   <option name"profesor">profesor
                   </option>
                <option name"alumno">alumno
                   </option>
                   <option name"administrador">administrador
                   </option>
               </select>
<input type="submit" value="actualizar"> 

</form>
                </fieldset>
        </div>
        <?php
      
        ?>
    </body>
</html>