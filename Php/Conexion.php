<?php
$host='localhost';
$root='root';
$password='12345';
$nombrebd='minsalud2';
$mysqli= new mysqli($host,$root,$password,$nombrebd,3307);
if(!$mysqli){
    die("No es posible conectar a la base de datos");
}

if (!$mysqli->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
    exit();
}
?>