<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <title>noticias actuales</title>
        <style>.move {-moz-animation: anim2 ease-in-out 3s infinite alternate; }
@-moz-keyframes anim2
{
   from {left: 0px;   -moz-transform: scale(1.0) rotate(0deg)   }
   50%  {left: 250px; -moz-transform: scale(0.8) rotate(10deg)  }
   to   {left: 500px; -moz-transform: scale(1.2) rotate(-20deg) }
}</style>
    </head>
    <body>
        <div class="menu"></div>
       <div class="titulo">Noticias </div>
        <div class="noticia">
            noticia
        </div>
        <div class="botonera">
       
</div>   
            
         <form name="editar_usuario" action="usuario.php" method="POST"> 

<input type="submit" value="editar usuario "> 
                 <form name="editar_noticia" action="mod_noticia.php" method="POST"> 

<input type="submit" value="editar noticia"> 
<div class="animcontainer">
        <img class="move" id="imB" src="logoIESAguadulce.gif">
        </div>
                 
</form>
        </div>
        <?php
      
        ?>
    </body>
</html>