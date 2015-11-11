<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <title>Administracion de noticias</title>
        <script language="javascript" src="WYSIWYG/source.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="menu"></div>
       <div class="titulo">Administración de noticias </div>
        <div class="editar_noticia">
            <fieldset class="edita_noticia">
                <legend> Actualiza noticia</legend>
           <form name="edit" action="funciones.php" method="POST"> 
               Titular<input type="text" name="titular">
              Cuerpo<textarea rows="30" cols="130" name="cuerpo"></textarea><br>
               Fecha inicio<input type="date" name="fecha_inicio"><br>
             Fecha final<input type="date" name="fecha_final"><br>
           <br>
               Pendiente <input type="checkbox" name="pendiente" value=true checked><br>
               Selecciona el grupo al que pertenece
               <select name="categoria">
                   <option name="profesor">Profesor
                   </option>
                <option name="alumno">Alumno
                   </option>
                   <option name="administrador">Administrador
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