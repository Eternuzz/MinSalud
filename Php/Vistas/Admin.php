<?php

require_once "../Conexion.php";
require_once "../Clases/Consultas.php";

session_start();

if (!isset($_SESSION['Cedula'])) {
    echo "<script>window.location.href='../Index.html'</script>";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion</title>
</head>
<body>
    
    
</body>
</html>