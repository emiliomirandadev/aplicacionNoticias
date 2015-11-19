<?php

include ('funciones.php');
$usuario = $_POST['nomusu'];
$pass = $_POST['nomcon'];
$pass_cifrada=  md5($pass);
$con = conexion();
/* La busqueda en la base de datos se realiza de este modo para evitar las inyecciones sql */
$query = ("SELECT correo, passwd,grupo FROM usuario  WHERE correo = '$usuario' and passwd='$pass_cifrada'");
$resultado = $con->query($query);
$nr = $resultado->rowCount();



if ($nr == 1) {
    foreach ($resultado as $key => $value) {
        $grupo = $value['grupo'];
    }
    echo "<div class=\"usu_corre\">Redirigiendo la página...</div>";
    //session_start();
    // $_SESSION['usuario'] = $usuario;
    //$_SESSION['clave'] = $pass;
    setcookie("conexion_usuario", $usuario, time() + 3600, "/");
    setcookie("conexion_grupo", $grupo, time() + 3600, "/");
    ?>
    <script>document.location.href = './noticias.php';</script>
    <?php

} else if ($nr == 0) {
    echo "<div class=\"usu_error\">El usuario o contraseña no es correcto</div>";
}
?>











