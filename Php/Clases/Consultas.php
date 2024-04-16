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

    public function AllDates(){
        $SQL = "SELECT f.*,s1.*,s2.*,s3.*,s4.*,d1.*,d2.*,d3.*,d4.*,tab1.dato AS dato1 ,
        tab11.dato AS dato11,
        tab21.dato AS dato21,
        tab23.dato AS dato23,
        tab24.dato AS dato24,
        tab26.dato AS dato26,
        tab27.dato AS dato27,
        tab34.dato AS dato34,
        tab39.dato AS dato39,
        tab56.dato AS dato56,
        tab57.dato AS dato57,
        tab60.dato AS dato60,
        tab62.dato AS dato62,
        tab63.dato AS dato63,
        tab65.dato AS dato65,
        tab68.dato AS dato68,
        tab69.dato AS dato69,
        tab75.dato AS dato75,
        tab77.dato AS dato77,
        tab80.dato AS dato80,
        tab81.dato AS dato81,
        tab82.dato AS dato82,
        tab83.dato AS dato83,
        tab84.dato AS dato84,
        tab85.dato AS dato85,
        tab88.dato AS dato88,
        tab89.dato AS dato89,
        tab90.dato AS dato90,
        tab92.dato AS dato92,
        tab94.dato AS dato94,
        tab95.dato AS dato95,
        tab96.dato AS dato96,
        tab97.dato AS dato97,
        tab98.dato AS dato98 
        FROM forms f INNER JOIN seccion_1 s1 ON f.id_seccion1=s1.id_seccion_1
        INNER JOIN seccion_2 s2 ON f.id_seccion2=s2.id_seccion_2
        INNER JOIN seccion_3 s3 ON f.id_seccion3=s3.id_seccion_3
        INNER JOIN seccion_4 s4 ON f.id_seccion4=s4.id_seccion_4
        INNER JOIN detalles_seccion1 d1 ON d1.id_seccion_1=s1.id_seccion_1
        INNER JOIN detalles_seccion2 d2 ON d2.id_seccion_2=s2.id_seccion_2
        INNER JOIN detalles_seccion3 d3 ON d3.id_seccion_3=s3.id_seccion_3
        INNER JOIN detalles_seccion4 d4 ON d4.id_seccion_4=s4.id_seccion_4
        INNER JOIN 1_departamento tab1 ON tab1.id=s1.1_Departamento
        INNER JOIN 11_estratoSoc tab11 ON tab11.id=s1.11_EstratoSoc
        INNER JOIN 21_tipofamilia tab21 ON tab21.id=s2.21_TipoFamilia
        INNER JOIN 23_estrucdinamica tab23 ON tab23.id = s2.23_EstrucDinamica
        INNER JOIN 24_funcfamilia tab24 ON tab24.id = s2.24_FuncFamilia
        INNER JOIN 26_escalazarit tab26 ON tab26.id = s2.26_EscalaZarit
        INNER JOIN 27_interrelaciones tab27 ON tab27.id = s2.27_Interrelaciones
        INNER JOIN 34_famenftrans tab34 ON tab34.id = s2.34_FamEnfTrans
        INNER JOIN 39_obtalimentos tab39 ON tab39.id = s2.39_ObtAlimentos
        INNER JOIN 56_sexo tab56 ON tab56.id = s3.56_Sexo
        INNER JOIN 57_rolfamilia tab57 ON tab57.id = s3.57_RolFamilia
        INNER JOIN 60_regimenafiliacion tab60 ON tab60.id = s3.60_RegimenAfiliacion
        INNER JOIN 62_grupoespecial tab62 ON tab62.id = s3.62_GrupoEspecial
        INNER JOIN 63_pertenenciaetnica tab63 ON tab63.id = s3.63_PertenenciaEtnica
        INNER JOIN 65_discapacidad tab65 ON tab65.id = s3.65_Discapacidad
        INNER JOIN 68_intervpendientes tab68 ON tab68.id = s3.68_IntervPendientes
        INNER JOIN 69_motivonoatencion tab69 ON tab69.id = s3.69_MotivoNoAtencion
        INNER JOIN 77_signosdesnutraguda tab77 ON tab77.id = s3.77_SignosDesnutrAguda
        INNER JOIN 75_diagnutric tab75 ON tab75.id = s3.75_DiagNutric
        INNER JOIN 80_motivosinatencion tab80 ON tab80.id = s3.80_MotivoSinAtencion
        INNER JOIN 81_medicinatradicional tab81 ON tab81.id = s3.81_MedicinaTradicional
        INNER JOIN 82_tipovivienda tab82 ON tab82.id = s4.82_TipoVivienda
        INNER JOIN 83_materialparedes tab83 ON tab83.id = s4.83_MaterialParedes
        INNER JOIN 84_materialpiso tab84 ON tab84.id = s4.84_MaterialPiso
        INNER JOIN 85_materialtecho tab85 ON tab85.id = s4.85_MaterialTecho
        INNER JOIN 88_riesgoaccidente tab88 ON tab88.id = s4.88_RiesgoAccidente
        INNER JOIN 89_accesoservicios tab89 ON tab89.id = s4.89_AccesoServicios
        INNER JOIN 90_fuenteenergiacocinar tab90 ON tab90.id = s4.90_FuenteEnergiaCocinar
        INNER JOIN 92_presenciaplagas tab92 ON tab92.id = s4.92_PresenciaPlagas
        INNER JOIN 94_animalesconvivencia tab94 ON tab94.id = s4.94_AnimalesConvivencia
        INNER JOIN 95_fuenteagua tab95 ON tab95.id = s4.95_FuenteAgua
        INNER JOIN 96_sistexcretas tab96 ON tab96.id = s4.96_SistExcretas
        INNER JOIN 97_sistaguasresid tab97 ON tab97.id = s4.97_SistAguasResid
        INNER JOIN 98_residuossolidos tab98 ON tab98.id = s4.98_ResiduosSolidos";


        $Ejecutar_Consulta =mysqli_query($this->Conexion,$SQL);

        if($Ejecutar_Consulta){
            return $Ejecutar_Consulta;
        }
        return null;
    }

}

?>