<?php

function conexion() {
    $hostname = '127.0.0.1';
    $database = 'noticias';

    $username = 'admin';
    $password = 'admin';
    try {
        $con = new PDO('mysql:host=' . $hostname . ';dbname=' . $database, $username, $password);
        print "Conexión exitosa!";
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "
";
        die();
    }
    return $con;
}

?>
