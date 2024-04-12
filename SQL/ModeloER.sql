
CREATE TABLE `1_Departamento` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

CREATE TABLE `11_EstratoSoc` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `11_EstratoSoc` (`dato`) VALUES
('Bajo-Bajo'),
('Bajo'),
('Medio-Bajo'),
('Medio'),
('Medio-Alto'),
('Alto');

CREATE TABLE `21_TipoFamilia` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `21_TipoFamilia` (`dato`) VALUES
('Nuclear biparental'),
('Nuclear monoparental'),
('Extenso biparental'),
('Extenso monoparental'),
('Compuesto biparental'),
('Compuesto monoparental'),
('Unipersonal');

CREATE TABLE `23_EstrucDinámica` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `23_EstrucDinámica` (`dato`) VALUES
('Riesgo Biológico'),
('Riesgo Psicológico'),
('Riesgo Social');

CREATE TABLE `24_FuncFamilia` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `24_FuncFamilia` (`dato`) VALUES
('Disfunción familiar'),
('Funcionalidad moderada'),
('Alta Funcionalidad');

CREATE TABLE `26_EscalaZarit` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `26_EscalaZarit` (`dato`) VALUES
('Ausencia de sobrecarga (≤ 46)'),
('Sobrecarga ligera (47-55)'),
('Sobrecarga intensa (≥ 56)');

CREATE TABLE `27_Interrelaciones` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `27_Interrelaciones` (`dato`) VALUES
('Positivo'),
('Tenue'),
('Estresante'),
('Energia Fluye'),
('Intenso');

CREATE TABLE `34_FamEnfTrans` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `34_FamEnfTrans` (`dato`) VALUES
('TB'),
('Lepra'),
('Escabiosis, enfermedades infecciosas de la piel u otras'),
('Malaria'),
('Dengue'),
('Chagas'),
('Hepatitis A'),
('Alguna enfermedad inmunoprevenible (varicela, parotiditis, otra)');

CREATE TABLE `39_ObtAlimentos` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `39_ObtAlimentos` (`dato`) VALUES
('Cultiva'),
('Cría de animales'),
('Cacería'),
('Recolección de alimentos'),
('Trueque o intercambio'),
('Compra'),
('Asistencia del Estado'),
('Ayuda humanitaria'),
('Otra');

CREATE TABLE `56_Sexo` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(50) NOT NULL
);

INSERT INTO `56_Sexo` (`dato`) VALUES
('Hombre'),
('Mujer'),
('Indeterminado');

CREATE TABLE `57_RolFamilia` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(100) NOT NULL
);

INSERT INTO `57_RolFamilia` (`dato`) VALUES
('Jefe(a) de familia'),
('Cónyuge o compañero(a)'),
('Hijo(a)'),
('Hermano(a)'),
('Padre o madre'),
('Otro');

CREATE TABLE `60_RegimenAfiliacion` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(50) NOT NULL
);

INSERT INTO `60_RegimenAfiliacion` (`dato`) VALUES
('Subsidiado'),
('Contributivo'),
('Especial'),
('Excepción'),
('No afiliado');

CREATE TABLE `62_GrupoEspecial` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `62_GrupoEspecial` (`dato`) VALUES
('Niñas, niños y adolescentes'),
('Gestantes'),
('Personas adultas mayores'),
('Personas con condición de discapacidad'),
('Personas con orientación sexual diversa'),
('Víctimas de violencia');

CREATE TABLE `63_PertenenciaEtnica` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `63_PertenenciaEtnica` (`dato`) VALUES
('Indígena'),
('ROM (Gitano)'),
('Raizal'),
('Palenquero'),
('Negro, Mulato, Afro'),
('Otra'),
('Ninguna');

CREATE TABLE `65_Discapacidad` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `65_Discapacidad` (`dato`) VALUES
('Física'),
('Auditiva'),
('Visual'),
('Sordoceguera'),
('Intelectual'),
('Psicosocial (mental)'),
('Múltiple'),
('Otra'),
('Ninguna');

CREATE TABLE `68_IntervPendientes` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `68_IntervPendientes` (`dato`) VALUES
('Valoración Integral para la PYMS'),
('Valoración integral por profesional en odontología para la PYMS'),
('Promoción y apoyo a la lactancia materna'),
('Aplicación de flúor'),
('Profilaxis y remoción de placa bacteriana'),
('Vacunación de acuerdo con el esquema'),
('Fortificación casera con micronutrientes en polvo'),
('Suplementación con micronutrientes'),
('Desparasitación intestinal antihelmíntica'),
('Tamizaje para anemia - Hemoglobina y hematocrito'),
('Planificación familiar y anticoncepción'),
('Tamizaje de riesgo cardiovascular'),
('Tamizaje para ITS'),
('Tamizaje para cáncer de cuello uterino'),
('Tamizaje para cáncer de mama'),
('Tamizaje para cáncer de próstata'),
('Tamizaje para cáncer de colon y recto'),
('Atención para el cuidado preconcepcional'),
('Atención para el cuidado prenatal – Controles prenatales'),
('Curso de preparación para la maternidad y paternidad');

CREATE TABLE `69_MotivoNoAtencion` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `69_MotivoNoAtencion` (`dato`) VALUES
('Lugar de atención lejano, cerrado o ausencia del profesional de salud'),
('Horarios de atención restringidos'),
('Largos tiempos de espera'),
('No había disponibilidad de la tecnología'),
('Desconocimiento del derecho a las intervenciones'),
('Desconocimiento que las intervenciones son gratuitas'),
('Persona enferma'),
('Persona hospitalizada'),
('Orden médica por enfermedad'),
('Falta de tiempo del cuidador'),
('Rechazo de la atención por tradición o cultura'),
('No afiliado');

CREATE TABLE `75_DiagNutric` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `75_DiagNutric` (`dato`) VALUES
('Obesidad'),
('Sobrepeso'),
('Riesgo de Sobrepeso'),
('Peso Adecuado para la Talla'),
('Riesgo de Desnutrición Aguda'),
('Desnutrición Aguda Moderada'),
('Desnutrición Aguda Severa'),
('Ninguna');

CREATE TABLE `77_SignosDesnutrAguda` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `77_SignosDesnutrAguda` (`dato`) VALUES
('Cabeza'),
('Cara'),
('Piel'),
('Tórax y abdomen'),
('Extremidades'),
('Comportamiento');

CREATE TABLE `80_MotivoSinAtencion` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `80_MotivoSinAtencion` (`dato`) VALUES
('Lugar de atención lejano, cerrado o ausencia del profesional de salud'),
('Horarios de atención restringidos'),
('Largos tiempos de espera'),
('No había disponibilidad de la tecnología'),
('Falta de tiempo del cuidador'),
('Tratamiento con remedios caseros'),
('Rechazo de la atención por tradición o cultura'),
('No afiliado');

CREATE TABLE `81_MedicinaTradicional` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `81_MedicinaTradicional` (`dato`) VALUES
('Médico tradicional'),
('Partera'),
('Sabedor de la salud propia'),
('No aplica');


CREATE TABLE `82_TipoVivienda` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(100) NOT NULL
);

INSERT INTO `82_TipoVivienda` (`dato`) VALUES
('Casa'),
('Apartamento'),
('Casa Indígena'),
('Carpa'),
('Pieza/Cuarto en Inquilinato'),
('Otro');

CREATE TABLE `83_MaterialParedes` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `83_MaterialParedes` (`dato`) VALUES
('Bloque, ladrillo, piedra, madera pulida'),
('Tapia pisada, adobe'),
('Bahareque'),
('Madera burda, tabla, tablón'),
('Guadua, casa, esterilla, otro vegetal'),
('Zinc, tela, lona, cartón, latas, desechos'),
('Otro');

CREATE TABLE `84_MaterialPiso` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(100) NOT NULL
);

INSERT INTO `84_MaterialPiso` (`dato`) VALUES
('Baldosa, vinilo, tableta, ladrillo'),
('Cemento, gravilla'),
('Tierra'),
('Madera'),
('Otro');

CREATE TABLE `85_MaterialTecho` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(100) NOT NULL
);

INSERT INTO `85_MaterialTecho` (`dato`) VALUES
('Teja (barro, plástico, eternit)'),
('Zinc'),
('Concreto'),
('Palma o paja'),
('Otro');

CREATE TABLE `88_RiesgoAccidente` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `88_RiesgoAccidente` (`dato`) VALUES
('Objetos cortopunzantes al alcance'),
('Sustancias tóxicas al alcance'),
('Riesgo de caídas'),
('Riesgo eléctrico'),
('Otro');

CREATE TABLE `89_AccesoServicios` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `89_AccesoServicios` (`dato`) VALUES
('Transporte público'),
('Centros de salud'),
('Escuelas'),
('Mercados/Comercios'),
('Áreas recreativas'),
('Otro');

CREATE TABLE `90_FuenteEnergiaCocinar` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(100) NOT NULL
);

INSERT INTO `90_FuenteEnergiaCocinar` (`dato`) VALUES
('Gas (natural, propano)'),
('Electricidad'),
('Leña'),
('Carbón'),
('Otro');

CREATE TABLE `92_PresenciaPlagas` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `92_PresenciaPlagas` (`dato`) VALUES
('Roedores'),
('Insectos (moscas, mosquitos, cucarachas)'),
('Otro');

CREATE TABLE `94_AnimalesConvivencia` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `94_AnimalesConvivencia` (`dato`) VALUES
('Perros'),
('Gatos'),
('Aves de corral'),
('Ganado (vacuno, porcino, caprino)'),
('Otro');

CREATE TABLE `95_FuenteAgua` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(100) NOT NULL
);

INSERT INTO `95_FuenteAgua` (`dato`) VALUES
('Red pública'),
('Pozo'),
('Río, lago o manantial'),
('Agua embotellada'),
('Otro');

CREATE TABLE `96_SistExcretas` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `96_SistExcretas` (`dato`) VALUES
('Alcantarillado público'),
('Pozo séptico'),
('Letrina'),
('Otro');

CREATE TABLE `97_SistAguasResid` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `97_SistAguasResid` (`dato`) VALUES
('Alcantarillado público'),
('Tratamiento in situ (pozo séptico, biodigestor)'),
('Descarga directa a cuerpos de agua'),
('Otro');

CREATE TABLE `98_ResiduosSolidos` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dato` VARCHAR(255) NOT NULL
);

INSERT INTO `98_ResiduosSolidos` (`dato`) VALUES
('Servicio de recolección municipal'),
('Quema'),
('Enterramiento'),
('Otro');


CREATE TABLE `seccion_1` (
    `id_seccion_1` INT AUTO_INCREMENT PRIMARY KEY,
    `1_Departamento` INT,
    `2_UnidadZonal` VARCHAR(255),
    `3_Municipio` VARCHAR(255),
    `4_Territorio` VARCHAR(255),
    `5_Microterritorio` VARCHAR(255),
    `6_Corregimiento` VARCHAR(255),
    `7_Dirección` VARCHAR(255),
    `8_Geopunto` VARCHAR(255),
    `9_UbicaciónHogar` VARCHAR(255),
    `10_NumIdFamilia` INT,
    `11_EstratoSoc` INT,
    `12_NumHogares` INT,
    `13_NumFamilias` INT,
    `14_NumPersonas` INT,
    `15_IdEBS` VARCHAR(255),
    `16_PrestadorPrim` VARCHAR(255),
    `17_RespEvaluación` VARCHAR(255),
    `18_PerfilEvaluador` VARCHAR(255),
    `19_CódigoFicha` VARCHAR(255),
    `20_FechaDilig` DATE,
    FOREIGN KEY (`1_Departamento`) REFERENCES `1_Departamento`(`id`),
    FOREIGN KEY (`11_EstratoSoc`) REFERENCES `11_EstratoSoc`(`id`)
);

CREATE TABLE `seccion_2` (
`id_seccion_2` INT AUTO_INCREMENT PRIMARY KEY,
    `21_TipoFamilia` INT,
    `22_NumPerFamilia` INT,
    `23_EstrucDinámica` INT,
    `24_FuncFamilia` INT,
    `25_CuidadorPrinc` VARCHAR(255),
    `26_EscalaZarit` INT,
    `27_Interrelaciones` INT,
    `28_FamNiñosAdoles` VARCHAR(255),
    `29_GestanteFam` VARCHAR(255),
    `30_FamAdultMayores` VARCHAR(255),
    `31_FamVícConflicto` VARCHAR(255),
    `32_FamDiscapacidad` VARCHAR(255),
    `33_FamEnfCrónica` VARCHAR(255),
    `34_FamEnfTrans` INT,
    `35_FamSucesosVit` VARCHAR(255),
    `36_FamVulnSocial` VARCHAR(255),
    `37_PrácCuidadoSalud` VARCHAR(255),
    `38_AntecEnfermedades` VARCHAR(255),
    `39_ObtAlimentos` INT,
    `40_HábitosSaludables` VARCHAR(255),
    `41_RecSocioemocionales` VARCHAR(255),
    `42_PrácCuidadoEnt` VARCHAR(255),
    `43_PrácRelSanas` VARCHAR(255),
    `44_RecSocComunitarios` VARCHAR(255),
    `45_PrácConsAutonomía` VARCHAR(255),
    `46_PrácPrevEnferm` VARCHAR(255),
    `47_PrácCuidadoAncestrales` VARCHAR(255),
    `48_CapDerechoSalud` VARCHAR(255),
    FOREIGN KEY (`27_Interrelaciones`) REFERENCES `27_Interrelaciones`(`id`),
    FOREIGN KEY (`21_TipoFamilia`) REFERENCES `21_TipoFamilia`(`id`),
    FOREIGN KEY (`23_EstrucDinámica`) REFERENCES `23_EstrucDinámica`(`id`),
    FOREIGN KEY (`24_FuncFamilia`) REFERENCES `24_FuncFamilia`(`id`),
    FOREIGN KEY (`26_EscalaZarit`) REFERENCES `26_EscalaZarit`(`id`),
    FOREIGN KEY (`34_FamEnfTrans`) REFERENCES `34_FamEnfTrans`(`id`),
    FOREIGN KEY (`39_ObtAlimentos`) REFERENCES `39_ObtAlimentos`(`id`)
);

CREATE TABLE `seccion_3` (
`id_seccion_3` INT AUTO_INCREMENT PRIMARY KEY,
    `49_PrimerNombre` VARCHAR(255),
    `50_SegundoNombre` VARCHAR(255),
    `51_PrimerApellido` VARCHAR(255),
    `52_SegundoApellido` VARCHAR(255),
    `53_TipoIdent` VARCHAR(50),
    `54_NumIdent` BIGINT,
    `55_FechaNac` DATE,
    `56_Sexo` INT,
    `57_RolFamilia` INT,
    `58_Ocupación` VARCHAR(255),
    `59_NivelEdu` VARCHAR(255),
    `60_RégimenAfiliación` INT,
    `61_EAPB` VARCHAR(255),
    `62_GrupoEspecial` INT,
    `63_PertenenciaÉtnica` INT,
    `64_ComunPuebloInd` VARCHAR(255),
    `65_Discapacidad` INT,
    `66_CondSaludCrónica` VARCHAR(255),
    `67_EsquemaPromoción` VARCHAR(255),
    `68_IntervPendientes` INT,
    `69_MotivoNoAtención` INT,
    `70_PrácDeportiva` VARCHAR(255),
    `71_LactMatExclusiva` VARCHAR(255),
    `72_DuracLactMat` VARCHAR(255),
    `73_Menor5Años` VARCHAR(50),
    `74_MedidasAntrop` VARCHAR(255),
    `75_DiagNutric` INT,
    `76_RiesgoMuerteDesnutr` VARCHAR(255),
    `77_SignosDesnutrAguda` INT,
    `78_EnfermedadMes` VARCHAR(255),
    `79_AtenciónEnfermedad` VARCHAR(255),
    `80_MotivoSinAtención` INT,
    `81_MedicinaTradicional` INT,
    FOREIGN KEY (`56_Sexo`) REFERENCES `56_Sexo`(`id`),
    FOREIGN KEY (`57_RolFamilia`) REFERENCES `57_RolFamilia`(`id`),
    FOREIGN KEY (`60_RégimenAfiliación`) REFERENCES `60_RegimenAfiliacion`(`id`),
    FOREIGN KEY (`62_GrupoEspecial`) REFERENCES `62_GrupoEspecial`(`id`),
    FOREIGN KEY (`63_PertenenciaÉtnica`) REFERENCES `63_PertenenciaEtnica`(`id`),
    FOREIGN KEY (`65_Discapacidad`) REFERENCES `65_Discapacidad`(`id`),
    FOREIGN KEY (`68_IntervPendientes`) REFERENCES `68_IntervPendientes`(`id`),
    FOREIGN KEY (`69_MotivoNoAtención`) REFERENCES `69_MotivoNoAtencion`(`id`),
    FOREIGN KEY (`75_DiagNutric`) REFERENCES `75_DiagNutric`(`id`),
    FOREIGN KEY (`77_SignosDesnutrAguda`) REFERENCES `77_SignosDesnutrAguda`(`id`),
    FOREIGN KEY (`80_MotivoSinAtención`) REFERENCES `80_MotivoSinAtencion`(`id`),
    FOREIGN KEY (`81_MedicinaTradicional`) REFERENCES `81_MedicinaTradicional`(`id`)
);

CREATE TABLE `seccion_4` (
`id_seccion_4` INT AUTO_INCREMENT PRIMARY KEY,
    `82_TipoVivienda` INT,
    `83_MaterialParedes` INT,
    `84_MaterialPiso` INT,
    `85_MaterialTecho` INT,
    `86_NumCuartos` INT,
    `87_Hacinamiento` VARCHAR(50),
    `88_RiesgoAccidente` INT,
    `89_AccesoServicios` INT,
    `90_FuenteEnergiaCocinar` INT,
    `91_CriaderosVectores` VARCHAR(255),
    `92_PresenciaPlagas` INT,
    `93_ActEconómica` VARCHAR(255),
    `94_AnimalesConvivencia` INT,
    `95_FuenteAgua` INT,
    `96_SistExcretas` INT,
    `97_SistAguasResid` INT,
    `98_ResiduosSolidos` INT,
    FOREIGN KEY (`82_TipoVivienda`) REFERENCES `82_TipoVivienda`(`id`),
    FOREIGN KEY (`83_MaterialParedes`) REFERENCES `83_MaterialParedes`(`id`),
    FOREIGN KEY (`84_MaterialPiso`) REFERENCES `84_MaterialPiso`(`id`),
    FOREIGN KEY (`85_MaterialTecho`) REFERENCES `85_MaterialTecho`(`id`),
    FOREIGN KEY (`88_RiesgoAccidente`) REFERENCES `88_RiesgoAccidente`(`id`),
    FOREIGN KEY (`89_AccesoServicios`) REFERENCES `89_AccesoServicios`(`id`),
    FOREIGN KEY (`90_FuenteEnergiaCocinar`) REFERENCES `90_FuenteEnergiaCocinar`(`id`),
    FOREIGN KEY (`92_PresenciaPlagas`) REFERENCES `92_PresenciaPlagas`(`id`),
    FOREIGN KEY (`94_AnimalesConvivencia`) REFERENCES `94_AnimalesConvivencia`(`id`),
    FOREIGN KEY (`95_FuenteAgua`) REFERENCES `95_FuenteAgua`(`id`),
    FOREIGN KEY (`96_SistExcretas`) REFERENCES `96_SistExcretas`(`id`),
    FOREIGN KEY (`97_SistAguasResid`) REFERENCES `97_SistAguasResid`(`id`),
    FOREIGN KEY (`98_ResiduosSolidos`) REFERENCES `98_ResiduosSolidos`(`id`)
);

