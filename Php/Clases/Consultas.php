<?php


class Consultas{

    public $Conexion;

    public function __construct($Conexion) {
        $this->Conexion = $Conexion;
    }

    public function DatesOfTables($nombre_tabla){

        $SQL = "SELECT * FROM $nombre_tabla";
        $Ejecutar_Consulta =mysqli_query($this->Conexion,$SQL);

        if($Ejecutar_Consulta){
            return $Ejecutar_Consulta;
        }

        return null;

    }

}

?>