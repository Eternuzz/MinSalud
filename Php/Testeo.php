<?php

require_once "Conexion.php";

//$SQL = "SELECT * FROM seccion_1 s1 INNER JOIN 1_departamento dp ON s1.1_Departamento=dp.id";
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
INNER JOIN 98_residuossolidos tab98 ON tab98.id = s4.98_ResiduosSolidos


";
/*tab77.dato AS dato77,
tab80.dato AS dato80,
tab81.dato AS dato81,*/

$Ejecutar_Consulta =mysqli_query($mysqli,$SQL);



$columnMapping = [
    //'1_Departamento' => 'Departamento',
    'dato1' => '1. Departamento',
    '2_UnidadZonal' => '2. Unidad Zonal de Planeación y Evaluación - Regional - Provincia',
    '3_Municipio' => '3. Municipio / Área no municipalizada',
    '4_Territorio' => '4. Territorio',
    '4_1_ID' => '4.1 ID',
    '4_2_Serial' => '4.2 Serial',
    '5_Microterritorio' => '5. Microterritorio',
    '5_1_ID' => '5.1 ID',
    '5_2_Serial' => '5.2 Serial',
    '6_Corregimiento' => '6. Corregimiento / Centro de poblado / Vereda / Localidad/ Barrio/ Resguardo Indígena',
    '7_Direccion' => '7. Dirección',
    '8_Geopunto' => '8. Geopunto (online-offline) y altitud',
    '9_UbicacionHogar' => '9. Ubicación del hogar (cuando no se cuenta con nomenclatura, punto de referencia)',
    '10_NumIdFamilia' => '10. Número de Identificación de la familia',
    'dato11' => '11. Estrato socioeconómico de la vivienda',
    '12_NumHogares' => '12. Número de hogares en la vivienda',
    '13_NumFamilias' => '13. Número de familias en la vivienda',
    '14_NumPersonas' => '14. Número de personas en la vivienda',
    '15_IdEBS' => '15. Número de identificación del Equipo Básico de Salud (EBS)',
    '16_PrestadorPrim' => '16. Prestador primario / Organismo de adscripción del EBS',
    '17_RespEvaluacion' => '17. Responsable de la evaluación de necesidades en salud - caracterización',
    '18_PerfilEvaluador' => '18. Perfil de quien realiza la evaluación de necesidades en salud - caracterización',
    '19_CodigoFicha' => '19. Código de la ficha',
    '20_FechaDilig' => '20. Fecha diligenciamiento de la ficha',
    'dato21' => '21. Tipo de familia',
    '22_NumPerFamilia' => '22. Número de personas que conforman la familia',
    'dato23' => '23. Estructura y dinámica familiar (Diligenciamiento Familiograma) Seleccione Tipo De Riesgo Identificado',
    '23_1_Observacion' => '23.1 Observación',
    'dato24' => '24. Funcionalidad de la familia (Apgar familiar)',
    '25_CuidadorPrinc' => '25. En la familia se identifica un cuidador principal',
    'dato26' => '26. Si la respuesta anterior es SI aplicar escala ZARIT y registre aquí el resultado',
    'dato27' => '27. Interrelaciones de la familia con el contexto sociocultural (diligenciar ECOMAPA)',
    '28_FamNinosAdoles' => '28. Familia con niñas, niños y adolescentes',
    '29_GestanteFam' => '29. Gestante en la familia',
    '30_FamAdultMayores' => '30. Familia con personas adultos mayores',
    '31_FamVicConflicto' => '31. Familia víctima del conflicto armado',
    '32_FamDiscapacidad' => '32. Familia que convive con personas con discapacidad',
    '33_FamEnfCronica' => '33. Familia que convive con personas que presentan alguna enfermedad crónica',
    'dato34' => '34. Familia que convive con persona que presentan alguna enfermedad transmisible',
    '35_FamSucesosVit' => '35. Familia con vivencia de sucesos vitales normativos y no normativos',
    '36_FamVulnSocial' => '36. Familia en situación de vulnerabilidad social',
    '37_PractCuidadoSalud' => '37. Familias con prácticas de cuidado de salud críticas',
    '38_AntecEnfermedades' => '38. Familia con integrantes con antecedentes de enfermedades crónicas',
    '38_2_IndicarCuales' => '38.2 Indicar cuáles',
    '38_3_RecibeTratamiento' => '38.3 ¿Recibe tratamiento?',
    'dato39' => '39. Cómo obtiene sus alimentos',
    '39_2_Cual' => '39.2 ¿Cuál?',
    '40_HabitosSaludables' => '40. Hábitos de vida saludable',
    '41_RecSocioemocionales' => '41. Recursos socioemocionales que potencian el cuidado de la salud de la familia',
    '42_PractCuidadoEnt' => '42. Prácticas para el cuidado y protección de los entornos',
    '43_PractRelSanas' => '43. Prácticas que favorecen el establecimiento de relaciones sanas y constructivas',
    '44_RecSocComunitarios' => '44. Recursos sociales y comunitarios para el establecimiento de redes colectivas para la promoción de la salud',
    '45_PractConsAutonomia' => '45. Prácticas para la conservación de la autonomía y la capacidad funcional de las personas mayores',
    '46_PractPrevEnferm' => '46. Prácticas para la prevención de enfermedades en todas las edades',
    '47_PractCuidadoAncestrales' => '47. Prácticas de cuidado desde los saberes ancestrales/tradicionales',
    '48_CapDerechoSalud' => '48. Capacidades de las familias para el ejercicio y exigibilidad del derecho a la salud',
    '49_PrimerNombre' => '49. Primer Nombre',
    '50_SegundoNombre' => '50. Segundo Nombre',
    '51_PrimerApellido' => '51. Primer Apellido',
    '52_SegundoApellido' => '52. Segundo Apellido',
    '53_TipoIdent' => '53. Tipo de identificación',
    '54_NumIdent' => '54. Número de identificación',
    '55_FechaNac' => '55. Fecha de nacimiento',
    'dato56' => '56. Sexo',
    'dato57' => '57. Rol dentro de la familia',
    '57_1_Cual' => '57.1 ¿Cuál?',
    '58_Ocupacion' => '58. Ocupación',
    '59_NivelEdu' => '59. Nivel Educativo',
    'dato60' => '60. Régimen de afiliación',
    '61_EAPB' => '61. EAPB',
    'dato62' => '62. Pertenencia a un grupo poblacional de especial protección',
    'dato63' => '63. Pertenencia étnica',
    '64_ComunPuebloInd' => '64. Comunidad o pueblo indígena',
    'dato65' => '65. Reconoce alguna discapacidad',
    '66_CondSaludCronica' => '66. El integrante de la familia presenta situaciones o condiciones de salud crónica',
    '67_EsquemaPromocion' => '67. Cumple con el esquema de atenciones de promoción y mantenimiento para el momento de curso de vida o para la gestación',
    'dato68' => '68. Intervenciones pendientes de promoción y mantenimiento de la salud',
    'dato69' => '69. Motivo por el cual no ha recibido las atenciones de promoción y mantenimiento de la salud',
    '70_PrácDeportiva' => '70. ¿Realiza alguna práctica deportiva o realiza ejercicio?',
    '71_LactMatExclusiva' => '71. Si es menor de 6 meses, ¿recibe lactancia materna exclusiva?',
    '72_DuracLactMat' => '72. Si es menor de 2 años, ¿hasta cuando recibió lactancia materna?',
    '73_Menor5Anos' => '73. ¿Es menor de 5 años?',
    '74_MedidasAntrop' => '74. Resultado de toma de medidas antropométricas',
    '74_1_PesoKilogramos' => '74.1 Peso en Kilogramos',
    '74_2_TallaCentimetros' => '74.2 Talla en Centímetros',
    'dato75' => '75. Diagnóstico nutricional indicador Peso para la talla',
    '76_RiesgoMuerteDesnutr' => '76. Medida complementaria identificación de riesgo de muerte por desnutrición aguda',
    'dato77' => '77. Se identifican signos físicos de desnutrición aguda',
    '78_EnfermedadMes' => '78. ¿Actualmente presenta o ha presentado en el último mes alguna enfermedad?',
    '78_2_Cuales' => '78.2 ¿Cuáles?',
    '79_AtencionEnfermedad' => '79. ¿Está recibiendo atención y tratamiento para la enfermedad actual?',
    'dato80' => '80. Si la respuesta a la pregunta anterior es NO, motivo por el cual no ha recibido la atención',
    'dato81' => '81. Si pertenece a población étnica, ¿actualmente es acompañado u orientado por algún agente de la medicina tradicional?',
    'dato82' => '82. Tipo de vivienda',
    '82_2_Cual' => '82.2 ¿Cuál?',
    'dato83' => '83. ¿Cuál es el material predominante de las paredes?',
    '83_2_Cual' => '83.2 ¿Cuál?',
    'dato84' => '84. ¿Cuál es el material predominante del piso de la vivienda?',
    '84_2_Cual' => '84.2 ¿Cuál?',
    'dato85' => '85. ¿Cuál es el material predominante del techo?',
    '85_2_Cual' => '85.2 ¿Cuál?',
    '86_NumCuartos' => '86. ¿De cuántos cuartos o piezas dormitorio dispone esta vivienda?',
    '87_Hacinamiento' => '87. Hacinamiento',
    'dato88' => '88. Se identifican algunos de los siguientes escenarios de riesgo de accidente en la vivienda',
    'dato89' => '89. Desde la vivienda se puede acceder fácilmente a',
    'dato90' => '90. ¿Cuál fuente de energía o combustible que se usa para cocinar?',
    '90_2_Cual' => '90.2 ¿Cuál?',
    '91_CriaderosVectores' => '91. ¿Se observa cerca de la vivienda o dentro de ella criaderos o reservorios que pueden favorecer la presencia de vectores transmisores de enfermedades?',
    '91_2_Cuales' => '91.2 ¿Cuáles?',
    'dato92' => '92. Observe si cerca de la vivienda hay alguno de los siguientes',
    '92_2_Especifique' => '92.2 Especifique',
    '93_ActEconomica' => '93. ¿Al interior de la vivienda se realiza alguna actividad económica?',
    'dato94' => '94. Señale los animales que conviven con la familia dentro de la vivienda o en su entorno inmediato',
    '94_2_Cual' => '94.2 ¿Cuál?',
    '94_3_RegistrarCantidad' => '94.3 Registrar Cantidad',
    'dato95' => '95. ¿Cuál es la principal fuente de abastecimiento de agua para consumo humano en la vivienda?',
    '95_2_Cual' => '95.2 ¿Cuál?',
    'dato96' => '96. ¿Cuál es el sistema de disposición de excretas en la vivienda?',
    '96_2_Cual' => '96.2 ¿Cuál?',
    'dato97' => '97. ¿Cuál es el sistema de disposición de aguas residuales domésticas en la vivienda?',
    '97_2_Cual' => '97.2 ¿Cuál?',
    'dato98' => '98. ¿Cómo se realiza la disposición final de los residuos sólidos ordinarios de la vivienda?',
    '98_2_Cual' => '98.2 ¿Cuál?'

];
/*



*/
if($Ejecutar_Consulta){

    header('Content-Type: text/csv; charset=UTF-8');
    header('Content-Disposition: attachment; filename="datos.csv"');



$csvFile = fopen('php://output', 'w');
fprintf($csvFile, chr(0xEF).chr(0xBB).chr(0xBF));

    // Escribir los nuevos nombres de columnas en el CSV
    fputcsv($csvFile, array_values($columnMapping));

    // Iterar sobre cada fila y escribirla en el archivo CSV con los nuevos nombres
    while ($row = mysqli_fetch_assoc($Ejecutar_Consulta)) {
        // Renombrar las claves del array de la fila según el mapeo
        $newRow = [];
        foreach ($columnMapping as $oldName => $newName) {
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