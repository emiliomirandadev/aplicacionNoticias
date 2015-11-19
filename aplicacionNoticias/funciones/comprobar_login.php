<?php

include ('funciones.php');
$usuario = $_POST['nomusu'];
$pass = $_POST['nomcon'];

$con = conexion();
/* La busqueda en la base de datos se realiza de este modo para evitar las inyecciones sql */
$query = ("SELECT correo, passwd FROM usuario  WHERE correo = '$usuario' and passwd='$pass'");
$resultado = $con->query($query);
$nr = $resultado->rowCount();

if ($nr == 1) {
   echo "es correcto";
    session_start();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['clave'] = $pass;
   // setcookie("conexion", $usuario, time() + 3600, "/");
    ?>
    <script>document.location.href='./noticias.php';</script>
    <?php
} else if ($nr == 0) {
   echo "<div class=\"usu_error\">No es correcto</div>";
}
?>











