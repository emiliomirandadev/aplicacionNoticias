<?php

function conexion() {
    $hostname = '127.0.0.1';
    $database = 'noticias';

    $username = 'admin';
    $password = 'admin';
    try {
        $con = new PDO('mysql:host=' . $hostname . ';dbname=' . $database, $username, $password);
      
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "
";
        die();
    }
    return $con;
}

?>
