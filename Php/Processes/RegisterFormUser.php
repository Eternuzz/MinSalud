<?php


include_once "../Conexion.php";

session_start();
if (!isset($_SESSION['Cedula'])) {
    echo "<script>window.location.href='../Index.html'</script>";
    exit();
}
//Datos Seccion 1

$Departamento_1 = $_POST['1_Departamento'];
$UnidadZonal_2 = $_POST['2_UnidadZonal'];
$Municipio_3 = $_POST['3_Municipio'];
$Territorio_4 = $_POST['4_Territorio'];
$Microterritorio_5 = $_POST['5_Microterritorio'];
$Corregimiento_6 = $_POST['6_Corregimiento'];
$Direccion_7 = $_POST['7_Direccion'];
$Geopunto_8 = $_POST['8_Geopunto'];
$UbicacionHogar_9 = $_POST['9_UbicacionHogar'];
$NumIdFamilia_10 = $_POST['10_NumIdFamilia'];
$EstratoSoc_11 = $_POST['11_EstratoSoc'];
$NumHogares_12 = $_POST['12_NumHogares'];
$NumFamilias_13 = $_POST['13_NumFamilias'];
$NumPersonas_14 = $_POST['14_NumPersonas'];
$IdEBS_15 = $_POST['15_IdEBS'];
$PrestadorPrim_16 = $_POST['16_PrestadorPrim'];
$RespEvaluacion_17 = $_POST['17_RespEvaluacion'];
$PerfilEvaluador_18 = $_POST['18_PerfilEvaluador'];
$CodigoFicha_19 = $_POST['19_CodigoFicha'];
$FechaDilig_20 = $_POST['20_FechaDilig'];

//


//Datos Seccion 2

$TipoFamilia_21 = $_POST['21_TipoFamilia'];
$NumPerFamilia_22 = $_POST['22_NumPerFamilia'];
$EstrucDinamica_23 = $_POST['23_EstrucDinamica'];
$FuncFamilia_24 = $_POST['24_FuncFamilia'];
$CuidadorPrinc_25 = $_POST['25_CuidadorPrinc'];
$EscalaZarit_26 = $_POST['26_EscalaZarit'];
$Interrelaciones_27 = $_POST['27_Interrelaciones'];
$FamNiñosAdoles_28 = $_POST['28_FamNiñosAdoles'];
$GestanteFam_29 = $_POST['29_GestanteFam'];
$FamAdultMayores_30 = $_POST['30_FamAdultMayores'];
$FamVicConflicto_31 = $_POST['31_FamVicConflicto'];
$FamDiscapacidad_32 = $_POST['32_FamDiscapacidad'];
$FamEnfCronica_33 = $_POST['33_FamEnfCronica'];
$FamEnfTrans_34 = $_POST['34_FamEnfTrans'];
$FamSucesosVit_35 = $_POST['35_FamSucesosVit'];
$FamVulnSocial_36 = $_POST['36_FamVulnSocial'];
$PracCuidadoSalud_37 = $_POST['37_PracCuidadoSalud'];
$AntecEnfermedades_38 = $_POST['38_AntecEnfermedades'];
$ObtAlimentos_39 = $_POST['39_ObtAlimentos'];
$HabitosSaludables_40 = $_POST['40_HabitosSaludables'];
$RecSocioemocionales_41 = $_POST['41_RecSocioemocionales'];
$PracCuidadoEnt_42 = $_POST['42_PracCuidadoEnt'];
$PracRelSanas_43 = $_POST['43_PracRelSanas'];
$RecSocComunitarios_44 = $_POST['44_RecSocComunitarios'];
$PracConsAutonomia_45 = $_POST['45_PracConsAutonomia'];
$PracPrevEnferm_46 = $_POST['46_PracPrevEnferm'];
$PracCuidadoAncestrales_47 = $_POST['47_PracCuidadoAncestrales'];
$CapDerechoSalud_48 = $_POST['48_CapDerechoSalud'];


//


//Datos Seccion 3

$PrimerNombre_49 = $_POST['49_PrimerNombre'];
$SegundoNombre_50 = $_POST['50_SegundoNombre'];
$PrimerApellido_51 = $_POST['51_PrimerApellido'];
$SegundoApellido_52 = $_POST['52_SegundoApellido'];
$TipoIdent_53 = $_POST['53_TipoIdent'];
$NumIdent_54 = $_POST['54_NumIdent'];
$FechaNac_55 = $_POST['55_FechaNac'];
$Sexo_56 = $_POST['56_Sexo'];
$RolFamilia_57 = $_POST['57_RolFamilia'];
$Ocupacion_58 = $_POST['58_Ocupacion'];
$NivelEdu_59 = $_POST['59_NivelEdu'];
$RegimenAfiliacion_60 = $_POST['60_RegimenAfiliacion'];
$EAPB_61 = $_POST['61_EAPB'];
$GrupoEspecial_62 = $_POST['62_GrupoEspecial'];
$PertenenciaEtnica_63 = $_POST['63_PertenenciaEtnica'];
$ComunPuebloInd_64 = $_POST['64_ComunPuebloInd'];
$Discapacidad_65 = $_POST['65_Discapacidad'];
$CondSaludCronica_66 = $_POST['66_CondSaludCronica'];
$EsquemaPromocion_67 = $_POST['67_EsquemaPromocion'];
$IntervPendientes_68 = $_POST['68_IntervPendientes'];
$MotivoNoAtencion_69 = $_POST['69_MotivoNoAtencion'];
$PracDeportiva_70 = $_POST['70_PracDeportiva'];
$LactMatExclusiva_71 = $_POST['71_LactMatExclusiva'];
$DuracLactMat_72 = $_POST['72_DuracLactMat'];
$Menor5Años_73 = $_POST['73_Menor5Años'];
$MedidasAntrop_74 = $_POST['74_MedidasAntrop'];
$DiagNutric_75 = $_POST['75_DiagNutric'];
$RiesgoMuerteDesnutr_76 = $_POST['76_RiesgoMuerteDesnutr'];
$SignosDesnutrAguda_77 = $_POST['77_SignosDesnutrAguda'];
$EnfermedadMes_78 = $_POST['78_EnfermedadMes'];
$AtencionEnfermedad_79 = $_POST['79_AtencionEnfermedad'];
$MotivoSinAtencion_80 = $_POST['80_MotivoSinAtencion'];
$MedicinaTradicional_81 = $_POST['81_MedicinaTradicional'];


//


//Datos Seccion 4

$TipoVivienda_82 = $_POST['82_TipoVivienda'];
$MaterialParedes_83 = $_POST['83_MaterialParedes'];
$MaterialPiso_84 = $_POST['84_MaterialPiso'];
$MaterialTecho_85 = $_POST['85_MaterialTecho'];
$NumCuartos_86 = $_POST['86_NumCuartos'];
$Hacinamiento_87 = $_POST['87_Hacinamiento'];
$RiesgoAccidente_88 = $_POST['88_RiesgoAccidente'];
$AccesoServicios_89 = $_POST['89_AccesoServicios'];
$FuenteEnergiaCocinar_90 = $_POST['90_FuenteEnergiaCocinar'];
$CriaderosVectores_91 = $_POST['91_CriaderosVectores'];
$PresenciaPlagas_92 = $_POST['92_PresenciaPlagas'];
$ActEconomica_93 = $_POST['93_ActEconomica'];
$AnimalesConvivencia_94 = $_POST['94_AnimalesConvivencia'];
$FuenteAgua_95 = $_POST['95_FuenteAgua'];
$SistExcretas_96 = $_POST['96_SistExcretas'];
$SistAguasResid_97 = $_POST['97_SistAguasResid'];
$ResiduosSolidos_98 = $_POST['98_ResiduosSolidos'];

//Excepciones 
$FechaDilig_20=null;
$FechaNac_55=null;

//

//Ids

$id_seccion_1=0;
$id_seccion_2=0;
$id_seccion_3=0;
$id_seccion_4=0;
//INSERT SECCION 1

// Preparar la consulta SQL

$sql = "INSERT INTO seccion_1 (1_Departamento, 2_UnidadZonal, 3_Municipio, 4_Territorio, 5_Microterritorio, 6_Corregimiento, 7_Direccion, 8_Geopunto, 9_UbicacionHogar, 10_NumIdFamilia, 11_EstratoSoc, 12_NumHogares, 13_NumFamilias, 14_NumPersonas, 15_IdEBS, 16_PrestadorPrim, 17_RespEvaluacion, 18_PerfilEvaluador, 19_CodigoFicha, 20_FechaDilig) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);
if ($stmt === false) {
    echo "Error en la preparacion: " . $mysqli->error;
    exit();
}

// Vincular parametros
$stmt->bind_param('issssssssiiiiissssss', $Departamento_1, $UnidadZonal_2, $Municipio_3, $Territorio_4, $Microterritorio_5, $Corregimiento_6, $Direccion_7, $Geopunto_8, $UbicacionHogar_9, $NumIdFamilia_10, $EstratoSoc_11, $NumHogares_12, $NumFamilias_13, $NumPersonas_14, $IdEBS_15, $PrestadorPrim_16, $RespEvaluacion_17, $PerfilEvaluador_18, $CodigoFicha_19, $FechaDilig_20);

// Ejecutar y verificar el resultado
if ($stmt->execute()) {
    $inserted_id = $stmt->insert_id;
    echo "Insertado correctamente, ID generado: " . $inserted_id;
    $id_seccion_1=$inserted_id;
} else {
    echo "Error en la insercion: " . $stmt->error;
}

$stmt->close();

//


//INERT DETALLES SECCION 1 ------------------------------------------------------


// Definición de variables
$ID_4_1 = $_POST['4_1_ID'];
$Serial_4_2 = $_POST['4_2_Serial'];
$ID_5_1 = $_POST['5_1_ID'];
$Serial_5_2 = $_POST['5_2_Serial'];

// Script de inserción
$sql = "INSERT INTO Detalles_seccion1 (id_seccion_1, 4_1_ID, 4_2_Serial, 5_1_ID, 5_2_Serial) VALUES (?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("issss", $id_seccion_1, $ID_4_1, $Serial_4_2, $ID_5_1, $Serial_5_2);
if ($stmt->execute()) {

    echo "DETALLE 1 Insertado correctamente, " ;
} else {
    echo "Error en la inserción: " . $stmt->error;
}
$stmt->close();




// ----------------------------------------------------------------

//INSERT SECCION 2

// Preparar la consulta SQL
$sql = "INSERT INTO seccion_2 (21_TipoFamilia, 22_NumPerFamilia, 23_EstrucDinamica, 24_FuncFamilia, 25_CuidadorPrinc, 26_EscalaZarit, 27_Interrelaciones, 28_FamNinosAdoles, 29_GestanteFam, 30_FamAdultMayores, 31_FamVicConflicto, 32_FamDiscapacidad, 33_FamEnfCronica, 34_FamEnfTrans, 35_FamSucesosVit, 36_FamVulnSocial, 37_PractCuidadoSalud, 38_AntecEnfermedades, 39_ObtAlimentos, 40_HabitosSaludables, 41_RecSocioemocionales, 42_PractCuidadoEnt, 43_PractRelSanas, 44_RecSocComunitarios, 45_PractConsAutonomia, 46_PractPrevEnferm, 47_PractCuidadoAncestrales, 48_CapDerechoSalud) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);
if ($stmt === false) {
    echo "Error en la preparacion: " . $mysqli->error;
    exit();
}

// Vincular parametros
$stmt->bind_param('iiiississssssissssisssssssss', 
    $TipoFamilia_21, $NumPerFamilia_22, $EstrucDinamica_23, $FuncFamilia_24, $CuidadorPrinc_25, $EscalaZarit_26, 
    $Interrelaciones_27, $FamNiñosAdoles_28, $GestanteFam_29, $FamAdultMayores_30, $FamVicConflicto_31, 
    $FamDiscapacidad_32, $FamEnfCronica_33, $FamEnfTrans_34, $FamSucesosVit_35, $FamVulnSocial_36, 
    $PracCuidadoSalud_37, $AntecEnfermedades_38, $ObtAlimentos_39, $HabitosSaludables_40, 
    $RecSocioemocionales_41, $PracCuidadoEnt_42, $PracRelSanas_43, $RecSocComunitarios_44, 
    $PracConsAutonomia_45, $PracPrevEnferm_46, $PracCuidadoAncestrales_47, $CapDerechoSalud_48);

// Ejecutar y verificar el resultado
if ($stmt->execute()) {
    $inserted_id = $stmt->insert_id;
    echo "Insertado correctamente, ID generado: " . $inserted_id;
    $id_seccion_2 = $inserted_id;

} else {
    echo "Error en la insercion: " . $stmt->error;
}

$stmt->close();

//


//INSERT DETALLES 2 --------------------------------------------------------------------------------------------------------------------------------


// Definición de variables
$Observacion_23_1 = $_POST['23_1_Observacion'];
$IndicarCuales_38_2 = $_POST['38_2_IndicarCuales'];
$RecibeTratamiento_38_3 = $_POST['38_3_RecibeTratamiento'];
$Cual_39_2 = $_POST['39_2_Cual'];



// Script de inserción
$sql = "INSERT INTO Detalles_seccion2 (id_seccion_2, 23_1_Observacion, 38_2_IndicarCuales, 38_3_RecibeTratamiento, 39_2_Cual) VALUES (?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("issss", $id_seccion_2, $Observacion_23_1, $IndicarCuales_38_2, $RecibeTratamiento_38_3, $Cual_39_2);
if ($stmt->execute()) {
    echo "DETALLE 2 Insertado correctamente";
} else {
    echo "Error en la insercion: " . $stmt->error;
}
$stmt->close();




// --------------------------------------------------------------------------------------------------------------------------------

//INSERT SECCION 3

// Preparar la consulta SQL
$sql = "INSERT INTO seccion_3 (49_PrimerNombre, 50_SegundoNombre, 51_PrimerApellido, 52_SegundoApellido, 53_TipoIdent, 54_NumIdent, 55_FechaNac, 56_Sexo, 57_RolFamilia, 58_Ocupacion, 59_NivelEdu, 60_RegimenAfiliacion, 61_EAPB, 62_GrupoEspecial, 63_PertenenciaEtnica, 64_ComunPuebloInd, 65_Discapacidad, 66_CondSaludCronica, 67_EsquemaPromocion, 68_IntervPendientes, 69_MotivoNoAtencion, 70_PractDeportiva, 71_LactMatExclusiva, 72_DuracLactMat, 73_Menor5Años, 74_MedidasAntrop, 75_DiagNutric, 76_RiesgoMuerteDesnutr, 77_SignosDesnutrAguda, 78_EnfermedadMes, 79_AtencionEnfermedad, 80_MotivoSinAtencion, 81_MedicinaTradicional) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);
if ($stmt === false) {
    echo "Error en la preparacion: " . $mysqli->error;
    exit();
}

// Vincular parametros
$stmt->bind_param('sssssisiissisiissssissssssissssis', 
    $PrimerNombre_49, $SegundoNombre_50, $PrimerApellido_51, $SegundoApellido_52, $TipoIdent_53, $NumIdent_54, 
    $FechaNac_55, $Sexo_56, $RolFamilia_57, $Ocupacion_58, $NivelEdu_59, $RegimenAfiliacion_60, $EAPB_61,
    $GrupoEspecial_62, $PertenenciaEtnica_63, $ComunPuebloInd_64, $Discapacidad_65, $CondSaludCronica_66, 
    $EsquemaPromocion_67, $IntervPendientes_68, $MotivoNoAtencion_69, $PracDeportiva_70, $LactMatExclusiva_71,
    $DuracLactMat_72, $Menor5Años_73, $MedidasAntrop_74, $DiagNutric_75, $RiesgoMuerteDesnutr_76,
    $SignosDesnutrAguda_77, $EnfermedadMes_78, $AtencionEnfermedad_79, $MotivoSinAtencion_80, $MedicinaTradicional_81);

// Ejecutar y verificar el resultado
if (!$stmt->execute()) {
    echo "Error al ejecutar la consulta: " . $stmt->error;
}
if ($stmt->execute()) {
    $inserted_id = $stmt->insert_id;
    echo "Insertado correctamente, ID generado: " . $inserted_id;
    $id_seccion_3 = $inserted_id;
} else {
    echo "Error en la insercion: " . $stmt->error;
}

$stmt->close();

//




//INSERT DETALLES 3 --------------------------------------------------------------------------------------------------------------------


// Definición de variables
$Cual_57_1 = $_POST['57_1_Cual'];
$PesoKilogramos_74_1 = $_POST['74_1_PesoKilogramos'];
$TallaCentimetros_74_2 = $_POST['74_2_TallaCentimetros'];
$Cuales_78_2 = $_POST['78_2_Cuales'];



// Script de inserción
$sql = "INSERT INTO Detalles_seccion3 (id_seccion_3,57_1_cual, 74_1_PesoKilogramos, 74_2_TallaCentimetros, 78_2_Cuales) VALUES (?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("issss", $id_seccion_3, $Cual_57_1, $PesoKilogramos_74_1, $TallaCentimetros_74_2, $Cuales_78_2);
if ($stmt->execute()) {
    echo "DETALLE 3 Insertado correctamente";
} else {
    echo "Error en la insercion: " . $stmt->error;
}
$stmt->close();



// ---------------------------------------------------------------------------------------------------------------------------------------

//INSERT SECCION 4

// Preparar la consulta SQL
$sql = "INSERT INTO seccion_4 (82_TipoVivienda, 83_MaterialParedes, 84_MaterialPiso, 85_MaterialTecho, 86_NumCuartos, 87_Hacinamiento, 88_RiesgoAccidente, 89_AccesoServicios, 90_FuenteEnergiaCocinar, 91_CriaderosVectores, 92_PresenciaPlagas, 93_ActEconomica, 94_AnimalesConvivencia, 95_FuenteAgua, 96_SistExcretas, 97_SistAguasResid, 98_ResiduosSolidos) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);
if ($stmt === false) {
    echo "Error en la preparacion: " . $mysqli->error;
    exit();
}

// Vincular parametros
$stmt->bind_param('iiiiisisissssiiii', 
    $TipoVivienda_82, $MaterialParedes_83, $MaterialPiso_84, $MaterialTecho_85, $NumCuartos_86, 
    $Hacinamiento_87, $RiesgoAccidente_88, $AccesoServicios_89, $FuenteEnergiaCocinar_90, 
    $CriaderosVectores_91, $PresenciaPlagas_92, $ActEconomica_93, $AnimalesConvivencia_94, 
    $FuenteAgua_95, $SistExcretas_96, $SistAguasResid_97, $ResiduosSolidos_98);

// Ejecutar y verificar el resultado
if ($stmt->execute()) {
    $inserted_id = $stmt->insert_id;
    echo "Insertado correctamente, ID generado: " . $inserted_id;
    $id_seccion_4 = $inserted_id;
} else {
    echo "Error en la insercion: " . $stmt->error;
}

$stmt->close();

//


// INSERT DETALLE 4 -----------------------------------------------------------------------------------------

// Definición de variables
$Cual_82_2 = $_POST['82_2_Cual'];
$Cual_83_2 = $_POST['83_2_Cual'];
$Cual_84_2 = $_POST['84_2_Cual'];
$Cual_85_2 = $_POST['85_2_Cual'];
$Cual_90_2 = $_POST['90_2_Cual'];
$Cuales_91_2 = $_POST['91_2_Cuales'];
$Especifique_92_2 = $_POST['92_2_Especifique'];
$Cual_94_2 = $_POST['94_2_Cual'];
$RegistrarCantidad_94_3 = $_POST['94_3_RegistrarCantidad'];
$Cual_95_2 = $_POST['95_2_Cual'];
$Cual_96_2 = $_POST['96_2_Cual'];
$Cual_97_2 = $_POST['97_2_Cual'];
$Cual_98_2 = $_POST['98_2_Cual'];


// Script de inserción
$sql = "INSERT INTO Detalles_seccion4 (id_seccion_4, 82_2_Cual, 83_2_Cual, 84_2_Cual, 85_2_Cual, 90_2_Cual, 91_2_Cuales, 92_2_Especifique, 94_2_Cual, 94_3_RegistrarCantidad, 95_2_Cual, 96_2_Cual, 97_2_Cual, 98_2_Cual) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("issssssssissss", $id_seccion_4, $Cual_82_2, $Cual_83_2, $Cual_84_2, $Cual_85_2, $Cual_90_2, $Cuales_91_2, $Especifique_92_2, $Cual_94_2, $RegistrarCantidad_94_3, $Cual_95_2, $Cual_96_2, $Cual_97_2, $Cual_98_2);
if ($stmt->execute()) {
    echo "DETALLE 4 Insertado correctamente";
} else {
    echo "Error en la insercion: " . $stmt->error;
}
$stmt->close();


//-----------------------------------------------------------------------------------------------------------------

$id_user = $_SESSION['Cedula'];
$insert_form = "INSERT INTO forms (id_seccion1,id_seccion2,id_seccion3,id_seccion4,id_user) VALUES ($id_seccion_1,$id_seccion_2,$id_seccion_3,$id_seccion_4,$id_user)";
$ejecutar = mysqli_query($mysqli,$insert_form);
if($ejecutar){
    ECHO "INSERTTS FORMS CORRECTO ";
}

// campo 25 aparece 0 en vez de NO
?>

