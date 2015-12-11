<?php

session_start();
session_destroy();
setcookie("conexion_usuario", $usuario, time() - 3600, "/");
setcookie("conexion_grupo", $grupo, time() - 3600, "/");
header('Location: login.php');
