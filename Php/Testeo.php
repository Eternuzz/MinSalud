<?php

require_once "Conexion.php";
require_once "Clases/Consultas.php";
require_once "Mapeo/MapeoColumnas.php";

$AllDates = new Consultas($mysqli);


if($AllDates->AllDates()){

    header('Content-Type: text/csv; charset=UTF-8');
    header('Content-Disposition: attachment; filename="datos.csv"');

    $csvFile = fopen('php://output', 'w');
    fprintf($csvFile, chr(0xEF).chr(0xBB).chr(0xBF));

    // Escribir los nuevos nombres de columnas en el CSV
    fputcsv($csvFile, array_values($MapeoColumna));

    // Iterar sobre cada fila y escribirla en el archivo CSV con los nuevos nombres
    while ($row = mysqli_fetch_assoc($Ejecutar_Consulta)) {
        // Renombrar las claves del array de la fila según el mapeo
        $newRow = [];
        foreach ($MapeoColumna as $oldName => $newName) {
            $newRow[$newName] = $row[$oldName] ?? null; // Asegura que todas las columnas estén presentes
        }
        fputcsv($csvFile, $newRow);
    }

    // Cerrar archivo
    fclose($csvFile);

}else{

    echo "Error en la consulta";

}
?>