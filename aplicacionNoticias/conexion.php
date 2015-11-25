<?php

function conexion() {
    $hostname = 'localhost';
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
  </body>
</html>