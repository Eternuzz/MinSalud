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

    public function DatosSeccion1(){
        $SQL = "SELECT * FROM seccion_1 s1 INNER JOIN 1_departamento dp ON s1.1_Departamento=dp.id";
        $Ejecutar_Consulta =mysqli_query($this->Conexion,$SQL);

    }

}

?>