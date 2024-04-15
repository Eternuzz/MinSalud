<?php
// Configuración de conexión a la base de datos
$host = '127.0.0.1';
$dbname = 'minsalud2';
$username = 'root';
$password = '12345';
$charset = 'utf8mb4';

// DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

// Mapeo de nombres de columnas
$columnMapping = [
    '1_Departamento' => 'Departamento',
    '2_UnidadZonal' => 'Unidad Zonal de Planeación y Evaluación - Regional - Provincia',
    '3_Municipio' => 'Municipio / Área no municipalizada',
    '4_Territorio' => 'Territorio',
    '5_Microterritorio' => 'Microterritorio',
    '6_Corregimiento' => 'Corregimiento / Centro de poblado / Vereda / Localidad/ Barrio/ Resguardo Indígena',
    '7_Direccion' => 'Dirección',
    '8_Geopunto' => 'Geopunto (online-offline) y altitud',
    '9_UbicacionHogar' => 'Ubicación del hogar (cuando no se cuenta con nomenclatura, punto de referencia)',
    '10_NumIdFamilia' => 'Número de Identificación de la familia',
    '11_EstratoSoc' => 'Estrato socioeconómico de la vivienda',
    '12_NumHogares' => 'Número de hogares en la vivienda',
    '13_NumFamilias' => 'Número de familias en la vivienda',
    '14_NumPersonas' => 'Número de personas en la vivienda',
    '15_IdEBS' => 'Número de identificación del Equipo Básico de Salud (EBS)',
    '16_PrestadorPrim' => 'Prestador primario / Organismo de adscripción del EBS',
    '17_RespEvaluacion' => 'Responsable de la evaluación de necesidades en salud - caracterización',
    '18_PerfilEvaluador' => 'Perfil de quien realiza la evaluación de necesidades en salud - caracterización',
    '19_CodigoFicha' => 'Código de la ficha',
    '20_FechaDilig' => 'Fecha diligenciamiento de la ficha',
    '21_TipoFamilia' => 'Tipo de familia',
    '22_NumPerFamilia' => 'Número de personas que conforman la familia',
    '23_EstrucDinamica' => 'Estructura y dinámica familiar (Diligenciamiento Familiograma)',
    '24_FuncFamilia' => 'Funcionalidad de la familia (Apgar familiar)',
    '25_CuidadorPrinc' => 'En la familia se identifica un cuidador principal',
    '26_EscalaZarit' => 'Si la respuesta anterior es SI aplicar escala ZARIT y registre aquí el resultado',
    '27_Interrelaciones' => 'Interrelaciones de la familia con el contexto sociocultural (diligenciar ECOMAPA)',
    '28_FamNinosAdoles' => 'Familia con niñas, niños y adolescentes',
    '29_GestanteFam' => 'Gestante en la familia',
    '30_FamAdultMayores' => 'Familia con personas adultos mayores',
    '31_FamVicConflicto' => 'Familia víctima del conflicto armado',
    '32_FamDiscapacidad' => 'Familia que convive con personas con discapacidad',
    '33_FamEnfCronica' => 'Familia que convive con personas que presentan alguna enfermedad crónica',
    '34_FamEnfTrans' => 'Familia que convive con persona que presentan alguna enfermedad transmisible',
    '35_FamSucesosVit' => 'Familia con vivencia de sucesos vitales normativos y no normativos',
    '36_FamVulnSocial' => 'Familia en situación de vulnerabilidad social',
    '37_PrácCuidadoSalud' => 'Familias con prácticas de cuidado de salud críticas',
    '38_AntecEnfermedades' => 'Familia con integrantes con antecedentes de enfermedades crónicas',
    '39_ObtAlimentos' => 'Cómo obtiene sus alimentos',
    '40_HabitosSaludables' => 'Hábitos de vida saludable',
    '41_RecSocioemocionales' => 'Recursos socioemocionales que potencian el cuidado de la salud de la familia',
    '42_PrácCuidadoEnt' => 'Prácticas para el cuidado y protección de los entornos',
    '43_PrácRelSanas' => 'Prácticas que favorecen el establecimiento de relaciones sanas y constructivas',
    '44_RecSocComunitarios' => 'Recursos sociales y comunitarios para el establecimiento de redes colectivas para la promoción de la salud',
    '45_PrácConsAutonomía' => 'Prácticas para la conservación de la autonomía y la capacidad funcional de las personas mayores',
    '46_PrácPrevEnferm' => 'Prácticas para la prevención de enfermedades en todas las edades',
    '47_PrácCuidadoAncestrales' => 'Prácticas de cuidado desde los saberes ancestrales/tradicionales',
    '48_CapDerechoSalud' => 'Capacidades de las familias para el ejercicio y exigibilidad del derecho a la salud',
    '49_PrimerNombre' => 'Primer Nombre',
    '50_SegundoNombre' => 'Segundo Nombre',
    '51_PrimerApellido' => 'Primer Apellido',
    '52_SegundoApellido' => 'Segundo Apellido',
    '53_TipoIdent' => 'Tipo de identificación',
    '54_NumIdent' => 'Número de identificación',
    '55_FechaNac' => 'Fecha de nacimiento',
    '56_Sexo' => 'Sexo',
    '57_RolFamilia' => 'Rol dentro de la familia',
    '58_Ocupacion' => 'Ocupación',
    '59_NivelEdu' => 'Nivel Educativo',
    '60_RegimenAfiliacion' => 'Régimen de afiliación',
    '61_EAPB' => 'EAPB',
    '62_GrupoEspecial' => 'Pertenencia a un grupo poblacional de especial protección',
    '63_PertenenciaEtnica' => 'Pertenencia étnica',
    '64_ComunPuebloInd' => 'Comunidad o pueblo indígena',
    '65_Discapacidad' => 'Reconoce alguna discapacidad',
    '66_CondSaludCronica' => 'El integrante de la familia presenta situaciones o condiciones de salud crónica',
    '67_EsquemaPromocion' => 'Cumple con el esquema de atenciones de promoción y mantenimiento para el momento de curso de vida o para la gestación',
    '68_IntervPendientes' => 'Intervenciones pendientes de promoción y mantenimiento de la salud',
    '69_MotivoNoAtencion' => 'Motivo por el cual no ha recibido las atenciones de promoción y mantenimiento de la salud',
    '70_PrácDeportiva' => '¿Realiza alguna práctica deportiva o realiza ejercicio?',
    '71_LactMatExclusiva' => 'Si es menor de 6 meses, ¿recibe lactancia materna exclusiva?',
    '72_DuracLactMat' => 'Si es menor de 2 años, ¿hasta cuando recibió lactancia materna?',
    '73_Menor5Años' => '¿Es menor de 5 años?',
    '74_MedidasAntrop' => 'Resultado de toma de medidas antropométricas',
    '75_DiagNutric' => 'Diagnóstico nutricional indicador Peso para la talla',
    '76_RiesgoMuerteDesnutr' => 'Medida complementaria identificación de riesgo de muerte por desnutrición aguda',
    '77_SignosDesnutrAguda' => 'Se identifican signos físicos de desnutrición aguda',
    '78_EnfermedadMes' => '¿Actualmente presenta o ha presentado en el último mes alguna enfermedad?',
    '79_AtencionEnfermedad' => '¿Está recibiendo atención y tratamiento para la enfermedad actual?',
    '80_MotivoSinAtencion' => 'Si la respuesta a la pregunta anterior es NO, motivo por el cual no ha recibido la atención',
    '81_MedicinaTradicional' => 'Si pertenece a población étnica, ¿actualmente es acompañado u orientado por algún agente de la medicina tradicional?',
    '82_TipoVivienda' => 'Tipo de vivienda',
    '83_MatParedes' => '¿Cuál es el material predominante de las paredes?',
    '84_MatPiso' => '¿Cuál es el material predominante del piso de la vivienda?',
    '85_MatTecho' => '¿Cuál es el material predominante del techo?',
    '86_NumCuartos' => '¿De cuántos cuartos o piezas dormitorio dispone esta vivienda?',
    '87_Hacinamiento' => 'Hacinamiento',
    '88_RiesgoAccidente' => 'Se identifican algunos de los siguientes escenarios de riesgo de accidente en la vivienda',
    '89_AccesoServicios' => 'Desde la vivienda se puede acceder fácilmente a',
    '90_EnergiaCocinar' => '¿Cuál fuente de energía o combustible que se usa para cocinar?',
    '91_CriaderosVectores' => '¿Se observa cerca de la vivienda o dentro de ella criaderos o reservorios que pueden favorecer la presencia de vectores transmisores de enfermedades?',
    '92_PresenciaPlagas' => 'Observe si cerca de la vivienda hay alguno de los siguientes',
    '93_ActEconomica' => '¿Al interior de la vivienda se realiza alguna actividad económica?',
    '94_AnimalesConvivencia' => 'Señale los animales que conviven con la familia dentro de la vivienda o en su entorno inmediato',
    '95_FuenteAgua' => '¿Cuál es la principal fuente de abastecimiento de agua para consumo humano en la vivienda?',
    '96_SistExcretas' => '¿Cuál es el sistema de disposición de excretas en la vivienda?',
    '97_SistAguasResid' => '¿Cuál es el sistema de disposición de aguas residuales domésticas en la vivienda?',
    '98_ResiduosSolidos' => '¿Cómo se realiza la disposición final de los residuos sólidos ordinarios de la vivienda?'
];
try {
    // Crear conexión PDO
    $pdo = new PDO($dsn, $username, $password, $options);

    // Consulta SQL para seleccionar todas las columnas necesarias
    $sql = "SELECT * FROM tu_tabla"; // Ajusta esta consulta a tus necesidades

    // Preparar statement
    $stmt = $pdo->query($sql);

    // Abrir archivo CSV para escritura
    $csvFile = fopen('datos.csv', 'w');

    // Escribir los nuevos nombres de columnas en el CSV
    fputcsv($csvFile, array_values($columnMapping));

    // Iterar sobre cada fila y escribirla en el archivo CSV con los nuevos nombres
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Renombrar las claves del array de la fila según el mapeo
        $newRow = [];
        foreach ($columnMapping as $oldName => $newName) {
            $newRow[$newName] = $row[$oldName] ?? null; // Asegura que todas las columnas estén presentes
        }
        fputcsv($csvFile, $newRow);
    }

    // Cerrar archivo
    fclose($csvFile);

    echo "Archivo CSV generado exitosamente.";
} catch (\PDOException $e) {
    error_log($e->getMessage());
    exit('No se pudo conectar a la base de datos.');
}
?>
