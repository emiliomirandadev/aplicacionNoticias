<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <title>Usuarios</title>
    </head>
    <body>
        <div class="menu"></div>
       <div class="titulo">Administracion de usuarios</div>
        <div class="editar">
            <fieldset class="edita">
                <legend> Actualiza usuario</legend>
           <form name="edit" action="funciones.php" method="POST"> 
               correo<input type="text" name="correo"><br>
               contraseña <input type="password" name="nombre"><br>
                nombre<input type="text" name="nombre"><br>
              apellido <input type="text" name="apellido"> <br>
              telefono <input type="number" name="tlf"> <br>
               Selecciona grupo al que pertenece
               <select name="grupo">
                   <option name= "profesor">profesor
                   </option>
                <option name="alumno">alumno
                   </option>
                   <option name="administrador">administrador
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