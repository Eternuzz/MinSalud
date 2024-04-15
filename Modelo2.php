
<?php

require_once "Php/Conexion.php";
require_once "Php/Clases/Consultas.php";

$consulta = new Consultas($mysqli);

function valores($Resultados){

    while($filas = mysqli_fetch_array($Resultados)){
        echo "<option value=".$filas['id'].">".$filas['dato']."</option>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/StyleModel.css">
    <title>MinSalud</title>
</head>
<body>

    <header>

        

    </header>


    <form action="Php/RegistroForm.php" method="post">

        <!-- Seccion 1. Informacion General -->
        <section class="section_1">

            <div class="titulo_seccion">1. INFORMACIÓN GENERAL</div>

            <div class="contain_subs">

                <!-- SubSeccion 1.1 Datos generales del escenario del entorno que se caracteriza -->
                <div class="sub_section1_1">
                    <div class="titulo_seccion">1.1 Datos generales del escenario del entorno que se caracteriza</div>


                    <div class="content_section1_1">

                        <div class="sub-title"> <b>1.</b> Departamento</div>
                        <!-- <input type="text" class="input_general" name="1_Departamento" list="miLista"> -->
                        <select class="input_general" name="1_Departamento" id="miLista">
                            <?php
                                valores($consulta->DatesOfTables('1_Departamento'));
                            ?>
                        </select>

                        <div class="sub-title"> <b>2. </b> Unidad Zonal de Planeación y Evaluación - Regional - Provincia</div>
                        <input type="text" class="input_general" name="2_UnidadZonal">


                        <div class="sub-title"> <b>3.</b> Municipio / Área no municipalizada</div>
                        <input type="text" class="input_general" name="3_Municipio">
                        
                        <div class="sub-title"> <b>4.</b> Territorio</div>
                        <input type="text" class="input_general" name="4_Territorio">
                        <input type="text" class="input_general" name="4_1_ID" placeholder="ID:">
                        <input type="text" class="input_general" name="4_2_Serial" placeholder="Serial:">

                        <div class="sub-title"> <b>5.</b> Microterritorio</div>
                        <input type="text" class="input_general" name="5_Microterritorio">
                        <input type="text" class="input_general" name="5_1_ID" placeholder="ID:">
                        <input type="text" class="input_general" name="5_2_Serial" placeholder="Serial:">
                        
                        <div class="sub-title"> <b>6.</b> Corregimiento / Centro de poblado / Vereda / Localidad/ Barrio/ Resguardo Indigena</div>
                        <input type="text" class="input_general" name="6_Corregimiento">
                        
                        <div class="sub-title"> <b>7.</b> Dirección</div>
                        <input type="text" class="input_general" name="7_Direccion">
                        
                        <div class="sub-title"> <b>8.</b> Geopunto (online-offline) y altitud</div>
                        <input type="text" class="input_general" name="8_Geopunto">
                        
                        <div class="sub-title"> <b>9.</b> Ubicación del hogar (cuando no se cuenta con nomenclatura, punto de referencia)</div>
                        <input type="text" class="input_general" name="9_UbicacionHogar">
                        
                        <div class="sub-title"> <b>10.</b> Número de Identificación de la familia</div>
                        <input type="number" class="input_general" name="10_NumIdFamilia">
                        
                        <div class="sub-title"> <b>11.</b> Estrato socieconómico de la vivienda</div>
                        <!-- <input type="text" class="input_general" name=""> -->
                        <select name="11_EstratoSoc" class="input_general">
                        <?php
                                valores($consulta->DatesOfTables('11_EstratoSoc'));
                            ?>
                        </select>
                        
                        <div class="sub-title"> <b>12.</b>  Número de hogares en la vivienda</div>
                        <input type="number" class="input_general" name="12_NumHogares">
                        
                        <div class="sub-title"> <b>13.</b> Número de familias en la vivienda</div>
                        <input type="number" class="input_general" name="13_NumFamilias">
                        
                        <div class="sub-title"> <b>14.</b> Número de personas en la vivienda</div>
                        <input type="number" class="input_general" name="14_NumPersonas">
                        

                    </div>
                </div>

                <!-- SubSeccion 1.2 Identificación del encuestador -->
                <div class="sub_section1_1">
                    <div class="titulo_seccion">1.2 Identificación del encuestador</div>

                    <div class="content_section1_1">

                        <div class="sub-title"> <b>15.</b>  Número de identificación del Equipo Básico de Salud (EBS) </div>
                        <input type="text" class="input_general" name="15_IdEBS">
    
                        <div class="sub-title"> <b>16.</b> Prestador primario / Organismo de adscripción del EBS </div>
                        <input type="text" class="input_general" name="16_PrestadorPrim">

                        <div class="sub-title"> <b>17.</b> Responsable de la evaluación de necesidades en salud - caracterización </div>
                        <input type="text" class="input_general" name="17_RespEvaluacion">
    
                        <div class="sub-title"> <b>18.</b> Perfil de quien realiza la evaluación de necesidades en salud - caracterización</div>
                        <input type="text" class="input_general" name="18_PerfilEvaluador">

                        <div class="sub-title"> <b>19.</b> Código de la ficha </div>
                        <input type="number" class="input_general" name="19_CodigoFicha">
    
                        <div class="sub-title"> <b>20.</b> Fecha diligencimiento de la ficha</div>
                        <input type="date" class="input_general" name="20_FechaDilig">

                        <div class="sub-title"> <b></b></div>
                        <a href="#seccion2" class="input_general" name="" >Siguiente</a>

                    </div>


                        


                </div>

            </div>


        </section>



        <!-- Seccion 2 Caracterizacion de la familia -->
        <section class="section_1" id="seccion2">

            <div class="titulo_seccion">2. CARACTERIZACION DE LA FAMILIA</div>

            <div class="contain_subs">

                <!-- SubSeccion 1.1 Datos generales del escenario del entorno que se caracteriza -->
                <div class="sub_section1_1">
                    <div class="titulo_seccion">2.1 Estructura y contexto familiar</div>


                    <div class="content_section1_1">

                        <div class="sub-title"> <b>21.</b> Tipo de familia</div>
                        <select name="21_TipoFamilia" class="input_general">
                        <?php
                                valores($consulta->DatesOfTables('21_TipoFamilia'));
                            ?>
                          </select>


                        <div class="sub-title"> <b>22. </b> Número de personas que conforman la familia</div>
                        <input type="number" class="input_general" name="22_NumPerFamilia">
                      

                        <div class="sub-title"> <b>23.</b> Estructura y dinámica familiar (Diligenciamiento Familiograma) Seleccione el tipo de riesgo identificado </div>
                        <select  class="input_general" name="23_EstrucDinamica">
                        <?php
                                valores($consulta->DatesOfTables('23_EstrucDinamica'));
                            ?>
                        </select>

                        <div class="sub-title"> <b>Observaciones </b></div>
                        <input type="text" class="input_general" name="23_1_Observacion">
                        
                        <div class="sub-title"> <b>24.</b> Funcionalidad de la familia (Apgar familiar)</div>
                        <select name="24_FuncFamilia" class="input_general">
                        <?php
                                valores($consulta->DatesOfTables('24_FuncFamilia'));
                            ?>
                          </select>


                        <div class="sub-title-large"> <b>25.</b> En la familia se identifica un cuidador principal de niños, niñas, persona con discapacidad, adulto mayor o enfermedad?</div>
                        <div class="checks">
                            <div class="check">
                                <input type="radio" id="opcion1" name="25_CuidadorPrinc" value="SI" onclick="MostrarDiv('26_t','26_v','SI')">
                                <label for="opcion1">SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="opcion2" name="25_CuidadorPrinc" value="NO" onclick="MostrarDiv('26_t','26_v','NO')">
                                <label for="opcion2">NO</label><br>
                            </div>
                        </div>

                        
                        <div class="sub-title dnone" id="26_t"> <b>26.</b>Si la respuesta anterior es SI aplicar escala ZARIT y registre aquí el resultado 
                            -puntaje para determinar si se requiere intervención individual o familiar</div>
                            <select name="26_EscalaZarit" class="input_general dnone" id="26_v">
                            <?php
                                valores($consulta->DatesOfTables('26_EscalaZarit'));
                            ?>
                            </select>
                        
                        <div class="sub-title"> <b>27.</b> Interrelaciones de la familia con el contexto socio cultural (diligenciar ECOMAPA) </div>
                        <select name="27_Interrelaciones" class="input_general">
                        <?php
                                valores($consulta->DatesOfTables('27_Interrelaciones'));
                            ?>
                          </select>

                    </div>
                </div>

                <!-- SubSeccion 2.2  Situaciones o condiciones de especial protección de la familia y sus integrantes -->
                <div class="sub_section1_1">
                    <div class="titulo_seccion">2.2  Situaciones o condiciones de especial protección de la familia y sus integrantes</div>

                    <div class="content_section1_1">

                        <div class="sub-title"> <b>28.</b> Familia con niñas, niños y adolescentes </div>
                                                <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="28_FamNiñosAdoles" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="28_FamNiñosAdoles" value="NO">
                                <label >NO</label><br>
                            </div>
                        </div>
    
                        <div class="sub-title"> <b>29.</b> Gestante en la familia</div>
                                                <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="29_GestanteFam" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="29_GestanteFam" value="NO">
                                <label >NO</label><br>
                            </div>
                        </div>

                        <div class="sub-title"> <b>30.</b> Familia con personas adultos mayores </div>
                                                <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="30_FamAdultMayores" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="30_FamAdultMayores" value="NO">
                                <label >NO</label><br>
                            </div>
                        </div>
    
                        <div class="sub-title"> <b>31.</b> Familia víctima del conflicto armado </div>
                                                <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="31_FamVicConflicto" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="31_FamVicConflicto" value="NO">
                                <label >NO</label><br>
                            </div>
                        </div>

                        <div class="sub-title"> <b>32.</b>  Familia que convive con personas con discapacidad </div>
                        <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="32_FamDiscapacidad" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="32_FamDiscapacidad" value="NO">
                                <label >NO</label><br>
                            </div>
                        </div>
    
                        <div class="sub-title-large"> <b>33.</b> Familia que convive con personas que presentan alguna enfermedad crónica,huérfana o en estado terminal</div>
                        <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="33_FamEnfCronica" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="33_FamEnfCronica" value="NO">
                                <label >NO</label><br>
                            </div>
                        </div>

                        <div class="sub-title"> <b>34.</b>  Familia que convive con persona que presentan alguna enfermedad transmisible</div>
                        <select name="34_FamEnfTrans" class="input_general">
                        <?php
                                valores($consulta->DatesOfTables('34_FamEnfTrans'));
                            ?>
                        </select>

                        <div class="sub-title_extend"> <b>35.</b>Familia con vivencia de sucesos vitales normativos y no normativos ( Eventos significativos que inciden de manera positiva o negativa en la 
                            persona y familia por ejemplo: Ingreso de niños estudiar, muerte familiar, accidente que genera discapacidad, separación pareja, entre otros)</div>
                        <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="35_FamSucesosVit" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="35_FamSucesosVit" value="NO">
                                <label >NO</label><br>
                            </div>
                        </div>
                        
                        <div class="sub-title_extend"> <b>36.</b>Familia en situación de vulnerabilidad social (Consumo de SPA - Alcohol, explotación sexual, trabajo infantil, conflictos interpersonales, 
                            violencia intrafamiliar, trastorno mental, entre otras</div>
                                                <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="36_FamVulnSocial" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="36_FamVulnSocial" value="NO">
                                <label >NO</label><br>
                            </div>
                        </div>
                        
                        <div class="sub-title_extend"> <b>37.</b>Familias con prácticas de cuidado de salud críticas de varios de sus integrantes que ponen en riesgo o han afectado en la salud (Hábitos
                            alimentarios, situaciones de abandono)
                            </div>
                                                <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="37_PracCuidadoSalud" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="37_PracCuidadoSalud" value="NO">
                                <label >NO</label><br>
                            </div>
                        </div>
                        
                        <div class="sub-title"> <b>38.</b>Familia con integrantes con antecedentes de Ca, HTA, Diabetes, Asma, Enfermedad cardiaca, otra</div>
                        <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="38_AntecEnfermedades" value="SI" onclick="MostrarDiv('38_2t','38_2v','SI');MostrarDiv('38_3t','38_3v','SI')">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="38_AntecEnfermedades" value="NO" onclick="MostrarDiv('38_2t','38_2v','NO');MostrarDiv('38_3t','38_3v','NO')">
                                <label >NO</label><br>
                            </div>
                        </div>
                        
                        <div class="sub-title dnone" id="38_2t"> <b>38.2.</b>Si la respuesta es si indique cuales</div>
                        <input type="text" class="input_general dnone" id="38_2v" name="38_2_IndicarCuales">
                        
                        <div class="sub-title dnone" id="38_3t"> <b>38.3.</b>Recibe tratamiento</div>
                        <input type="hidden" name="38_3_RecibeTratamiento" value="">
                        <div class="checks dnone" id="38_3v">
                            <div class="check">
                                <input type="radio" id="" name="38_3_RecibeTratamiento" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="38_3_RecibeTratamiento" value="NO">
                                <label >NO</label><br>
                            </div>
                        </div>
                        
                        <div class="sub-title"> <b>39.</b>Cómo obtiene sus alimentos</div>
                        <select class="input_general selects" name="39_ObtAlimentos" data-target="39t_39v">
                        <?php
                                valores($consulta->DatesOfTables('39_ObtAlimentos'));
                            ?>
                        </select>
                        
                        <div class="sub-title dnone" id="39t" > <b>39.2.</b>Cuál?</div>
                        <input type="text" class="input_general dnone" name="39_2_Cual" id="39v">


                    </div>


                </div>


                <!-- SubSeccion 2.3   Prácticas o condiciones protectoras para el cuidado de la salud predominantes en la familia -->
                <div class="sub_section1_1">
                    <div class="titulo_seccion">2.3 Prácticas o condiciones protectoras para el cuidado de la salud predominantes en la familia</div>

                    <div class="content_section1_1">

                        <div class="sub-title_extend"> <b>40.</b>  Hábitos de vida saludable adaptado a las condiciones 
                            contextuales y culturales de la familia y sus integrantes. </div>
                        <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="40_HabitosSaludables" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="40_HabitosSaludables" value="NO">
                                <label >NO</label><br>
                            </div>
                        </div>
    
                        <div class="sub-title-large"> <b>41.</b> Recursos socioemocionales que 
                            potencian el cuidado de la salud de la familia</div>
                        <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="41_RecSocioemocionales" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="41_RecSocioemocionales" value="NO">
                                <label >NO</label><br>
                            </div>
                        </div>

                        <div class="sub-title"> <b>42.</b> Prácticas para el cuidado y protección de los entornos </div>
                        <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="42_PracCuidadoEnt" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="42_PracCuidadoEnt" value="NO">
                                <label >NO</label><br>
                            </div>
                        </div>
    
                        <div class="sub-title-large"> <b>43.</b> Prácticas de favorecen el establecimiento 
                            de relaciones sanas y constructivas </div>
                        <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="43_PracRelSanas" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="43_PracRelSanas" value="NO">
                                <label >NO</label><br>
                            </div>
                        </div>

                        <div class="sub-title-large"> <b>44.</b>  Recursos sociales y comunitarios para el establecimiento 
                            de redes colectivas para la promoción de la salud. </div>
                        <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="44_RecSocComunitarios" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="44_RecSocComunitarios" value="NO">
                                <label >NO</label><br>
                            </div>
                        </div>
    
                        <div class="sub-title-large"> <b>45.</b> Prácticas para la conservación de la autonomía 
                            y la capacidad funcional de las personas mayores.</div>
                        <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="45_PracConsAutonomia" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="45_PracConsAutonomia" value="NO">
                                <label >NO</label><br>
                            </div>
                        </div>
                        
                        <div class="sub-title-large"> <b>46</b>Prácticas para la prevención 
                            de enfermedades en todas las edades.</div>
                        <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="46_PracPrevEnferm" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="46_PracPrevEnferm" value="NO">
                                <label >NO</label><br>
                            </div>
                        </div>
                        
                        <div class="sub-title_extend"> <b>47</b>Prácticas de cuidado desde los saberes ancestrales/tradicionales (aplica para 
                            poblaciones y comunidades indígenas, negras afrocolombianas, raizales, palenqueras y rom)</div>
                        <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="47_PracCuidadoAncestrales" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="47_PracCuidadoAncestrales" value="NO">
                                <label >NO</label><br>
                            </div>
                        </div>
                        
                        <div class="sub-title-large"> <b>48</b>Capacidades de las familias para el ejercicio y exigibilidad del derecho a la salud</div>
                        <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="48_CapDerechoSalud" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="48_CapDerechoSalud" value="NO">
                                <label >NO</label><br>
                            </div>
                        </div>

                        <div class="sub-title"></div>
                        <a href="#seccion3" class="input_general" name="" >Siguiente</a>

                    </div>


                </div>

            </div>


        </section>


        <!-- Seccion 3 Caracterizacion de los integrantes de la familia -->

        <section class="section_1" id="seccion3">

            <div class="titulo_seccion">3. CARACTERIZACIÓN DE LOS INTEGRANTES DE LA FAMILIA</div>

            <div class="contain_subs">

                <!-- SubSeccion 1.1 Datos generales del escenario del entorno que se caracteriza -->
                <div class="sub_section1_1">
                    <div class="titulo_seccion">3.1  Identificación de cada uno de los integrantes</div>


                    <div class="content_section1_1">

                        <div class="sub-title"> <b>49.</b>   Primer Nombre</div>
                        <input type="text" class="input_general" name="49_PrimerNombre" >


                        <div class="sub-title"> <b>50. </b> Segundo Nombre</div>
                        <input type="text" class="input_general" name="50_SegundoNombre">

                        <div class="sub-title"> <b>51.</b> Primer Apellido</div>
                        <input type="text" class="input_general" name="51_PrimerApellido">
                        
                        <div class="sub-title"> <b>52.</b> Segundo Apellido</div>
                        <input type="text" class="input_general" name="52_SegundoApellido">

                        <div class="sub-title"> <b>53.</b> Tipo de identificación</div>
                        <input type="text" class="input_general" name="53_TipoIdent" list="tipoid">
                        <datalist id="tipoid">
                            <option value="Cedula De Ciudadania">
                            <option value="Cedula De Extranjeria">
                            <option value="Tarjeta De Identidad">
                          </datalist>


                        
                        <div class="sub-title"> <b>54.</b>  Número de identificación</div>
                        <input type="number" class="input_general" name="54_NumIdent">
                        
                        <div class="sub-title"> <b>55.</b> Fecha de nacimiento</div>
                        <input type="date" class="input_general" name="55_FechaNac">
                        
                        <div class="sub-title"> <b>56.</b>  Sexo</div>
                        <select name="56_Sexo" class="input_general">
                        <?php
                                valores($consulta->DatesOfTables('56_Sexo'));
                            ?>
                          </select>
                        
                        <div class="sub-title"> <b>57.</b> Rol dentro de la familia</div>
                        <select name="57_RolFamilia" class="input_general selects" data-target="57t_57v">
                        <?php
                                valores($consulta->DatesOfTables('57_RolFamilia'));
                            ?>
                          </select>

                        <div class="sub-title dnone" id="57t"> <b>57_1.</b>  Cual</div>
                        <input type="text" class="input_general dnone" name="57_1_Cual" id="57v">
                        
                        <div class="sub-title"> <b>58.</b>  Ocupación</div>
                        <input type="text" class="input_general" name="58_Ocupacion">

                        <div class="sub-title"> <b>59.</b>  Nivel Educativo</div>
                        <input type="text" class="input_general" name="59_NivelEdu">

                        <div class="sub-title"> <b>60.</b>  Régimen de afiliación</div>
                        <select name="60_RegimenAfiliacion" class="input_general">
                        <?php
                                valores($consulta->DatesOfTables('60_RegimenAfiliacion'));
                            ?>
                          </select>

                        <div class="sub-title"> <b>61.</b> EAPB</div>
                        <input type="text" class="input_general" name="61_EAPB">

                        <div class="sub-title"> <b>62.</b> Pertenencia a un grupo poblacional de especial protección</div>
                        <select name="62_GrupoEspecial" class="input_general">
                        <?php
                                valores($consulta->DatesOfTables('62_GrupoEspecial'));
                            ?>
                          </select>

                        <div class="sub-title"> <b>63.</b> Pertenencia étnica</div>
                        <select name="63_PertenenciaEtnica" class="input_general">
                        <?php
                                valores($consulta->DatesOfTables('63_PertenenciaEtnica'));
                            ?>
                          </select>

                        <div class="sub-title"> <b>64.</b> Comunidad o pueblo indígena</div>
                        <input type="text" class="input_general" name="64_ComunPuebloInd">

                        <div class="sub-title"> <b>65.</b> Reconoce alguna discapacidad</div>
                        <select name="65_Discapacidad" class="input_general">
                        <?php
                                valores($consulta->DatesOfTables('65_Discapacidad'));
                            ?>
                          </select>

                        <div class="sub-title"> <b>66.</b> El integrante de la familia presenta situaciones o condiciones de salud crónica</div>
                        <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="66_CondSaludCronica" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="66_CondSaludCronica" value="NO">
                                <label >NO</label><br>
                            </div>
                        </div>
                        
             
                        

                    </div>
                </div>

                <!-- SubSeccion 3.2 Situaciones o condiciones de salud -->
                <div class="sub_section1_1">
                    <div class="titulo_seccion">3.2 Situaciones o condiciones de salud</div>

                    <div class="content_section1_1">

                        <div class="sub-title-large"> <b>67.</b>  Cumple con el esquema de atenciones de promoción y mantenimiento para el momento de curso de vida o para la gestación </div>
                        <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="67_EsquemaPromocion" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="67_EsquemaPromocion" value="NO">
                                <label >NO</label><br>
                            </div>
                        </div>
    
                        <div class="sub-title"> <b>68.</b> Intervenciones pendientes de promoción y mantenimiento de la salud </div>
                        <select class="input_general" name="68_IntervPendientes">
                        <?php
                                valores($consulta->DatesOfTables('68_IntervPendientes'));
                            ?>
                        </select>

                        <div class="sub-title-large"> <b>69.</b> Motivo por el cual no ha recibido las atenciones de promoción y mantenimiento de la salud</div>
                        <select class="input_general" name="69_MotivoNoAtencion">
                        <?php
                                valores($consulta->DatesOfTables('69_MotivoNoAtencion'));
                            ?>
                        </select>
    
                        <div class="sub-title"> <b>70.</b>  ¿Realiza alguna práctica deportiva o realiza ejercicio?</div>
                        <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="70_PracDeportiva" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="70_PracDeportiva" value="NO">
                                <label >NO</label><br>
                            </div>
                        </div>

                        <div class="sub-title"> <b>71.</b>  Si es menor de 6 meses, ¿recibe lactancia materna exclusiva? </div>
                        <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="71_LactMatExclusiva" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="71_LactMatExclusiva" value="NO">
                                <label >NO</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="71_LactMatExclusiva" value="NO APLICA">
                                <label >No Aplica</label><br>
                            </div>
                        </div>
    
                        <div class="sub-title -large"> <b>72.</b> Si es menor de 2 años, ¿hasta cuando recibio lactancia materna? (en meses)</div>
                        <input type="number" class="input_general" name="72_DuracLactMat">

                        <div class="sub-title"> <b>73.</b>  Es menor de 5 años?</div>
                        <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="73_Menor5Años" value="SI">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="73_Menor5Años" value="NO">
                                <label >NO</label><br>
                            </div>
                           
                        </div>

                        <div class="sub-title"> <b>74.</b> Resultado de toma de medidas antropométricas </div>
                        <input type="text" class="input_general" name="74_MedidasAntrop">

                        <div class="sub-title"> <b>74.1.</b>  Peso (en Kilogramos) </div>
                        <input type="number" class="input_general" name="74_1_PesoKilogramos">

                        <div class="sub-title"> <b>74.2.</b> Talla (en centímetros) </div>
                        <input type="number" class="input_general" name="74_2_TallaCentimetros">

                        <div class="sub-title"> <b>75.</b> Diagnóstico nutricional inidicador Peso para la talla</div>
                        <select class="input_general" name="75_DiagNutric">
                        <?php
                                valores($consulta->DatesOfTables('75_DiagNutric'));
                            ?>
                        </select>

                        <div class="sub-title-large"> <b>76.</b>  Medida complementaria identificación de riesgo de muerte por desnutrición aguda , Perimetro Braquial</div>
                        <input type="text" class="input_general" name="76_RiesgoMuerteDesnutr">

                        <div class="sub-title"> <b>77.</b> Se identifican signos fisicos de desnutrición aguda </div>
                        <select class="input_general" name="77_SignosDesnutrAguda">
                        <?php
                                valores($consulta->DatesOfTables('77_SignosDesnutrAguda'));
                            ?>
                        </select>

                        <div class="sub-title_extend"> <b>78.</b> ¿Actualmente presenta o ha presentado en el último mes alguna enfermedad como: 
                            Diarrea o soltura de estomago Tos, resfriado, gripa, bronquitis o pulmonía? Problemas 
                            de piel / alergias, accidente casero, familiar o escolar. Alguna otra enfermedad. </div>
                            <div class="checks">
                                <div class="check">
                                    <input type="radio" id="" name="78_EnfermedadMes" value="SI" onclick="MostrarDiv('78_2t','78_2v','SI')">
                                    <label >SI</label><br>
                                </div>
                                <div class="check">
                                    <input type="radio" id="" name="78_EnfermedadMes" value="NO" onclick="MostrarDiv('78_2t','78_2v','NO')">
                                    <label >NO</label><br>
                                </div>
                            </div>

                        <div class="sub-title dnone" id="78_2t"> <b>78.2.</b> Cuales</div>
                        <input type="text" class="input_general dnone" id="78_2v" name="78_2_Cuales">

                        <div class="sub-title"> <b>79.</b> ¿Esta recibiendo atención y tratamiento para la enfermedad actual?</div>
                        <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="79_AtencionEnfermedad" value="SI" onclick="MostrarDiv('80_t','80_v','NO')">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="79_AtencionEnfermedad" value="NO" onclick="MostrarDiv('80_t','80_v','SI')">
                                <label >NO</label><br>
                            </div>
                        </div>

                        <div class="sub-title-large dnone" id="80_t"> <b>80.</b> Si la respuesta a la pregunta anterior es NO. Marque con X el motivo por el cual no ha recibido la atención </div>
                        <select class="input_general dnone" id="80_v"name="80_MotivoSinAtencion">
                        <?php
                                valores($consulta->DatesOfTables('80_MotivoSinAtencion'));
                            ?>
                        </select>

                        <div class="sub-title-large"> <b>81.</b> Si pertenece a población étnica. Actualmente es acompañado u orientado por algún agente de la medicina tradicional?</div>
                        <select class="input_general" name="81_MedicinaTradicional">
                        <?php
                                valores($consulta->DatesOfTables('81_MedicinaTradicional'));
                            ?>
                            </select>


                        <div class="sub-title"> <b></b></div>
                        <a href="#seccion4" class="input_general" name="" >Siguiente</a>

                    </div>


                        


                </div>

            </div>


        </section>


        <!-- Seccion 4 Caracterizacion del entorno -->

        <section class="section_1" id="seccion4">

            <div class="titulo_seccion">4. CARACTERIZACIÓN DEL ENTORNO</div>

            <div class="contain_subs">

                <!-- SubSeccion 1.1 Datos generales del escenario del entorno que se caracteriza -->
                <div class="sub_section1_1">
                    <div class="titulo_seccion">4.1 Características y condiciones del entorno y de la vivienda</div>


                    <div class="content_section1_1">

                        <div class="sub-title"> <b>82.</b> Tipo Vivienda</div>
                        <select class="input_general selects" name="82_TipoVivienda" data-target="82t_82v">
                        <?php
                                valores($consulta->DatesOfTables('82_TipoVivienda'));
                            ?>
                            </select>
                       

                        <div class="sub-title dnone" id="82t"> <b>82.2. </b> Cual?</div>
                        <input type="text" class="input_general dnone" name="82_2_Cual" id="82v">

                        

                        <div class="sub-title"> <b>83.</b>  ¿Cuál es el material predominante de las paredes?</div>
                        <select class="input_general selects" name="83_MaterialParedes" data-target="83t_83v">
                        <?php
                                valores($consulta->DatesOfTables('83_MaterialParedes'));
                            ?></select>
                        
                        <div class="sub-title dnone" id="83t"> <b>83.2.</b> Cual?</div>
                        <input type="text" class="input_general dnone" name="83_2_Cual" id="83v">

                        <div class="sub-title"> <b>84.</b>  ¿Cuál es el material predominante del piso de la vivienda?</div>
                        <select class="input_general selects" name="84_MaterialPiso" data-target="84t_84v">
                        <?php
                                valores($consulta->DatesOfTables('84_MaterialPiso'));
                            ?></select>

                        
                        <div class="sub-title dnone" id="84t"> <b>84.2.</b> Cual?</div>
                        <input type="text" class="input_general dnone" name="84_2_Cual" id="84v">
                        
                        <div class="sub-title"> <b>85.</b> ¿Cuál es el material predominante del techo?</div>
                        <select class="input_general selects" name="85_MaterialTecho" data-target="85t_85v">
                        <?php
                                valores($consulta->DatesOfTables('85_MaterialTecho'));
                            ?></select>
                        
                        <div class="sub-title dnone" id="85t"> <b>85.2.</b> Cual?</div>
                        <input type="text" class="input_general dnone" name="85_2_Cual" id="85v">

                        <div class="sub-title"> <b>86.</b> ¿De cuántos cuartos o piezas dormitorio dispone esta vivienda?</div>
                        <input type="number" class="input_general" name="86_NumCuartos">
                        
                        <div class="sub-title"> <b>87.</b> Hacinamiento </div>
                        <input type="text" class="input_general" name="87_Hacinamiento">
                        
                        <div class="sub-title"> <b>88.</b> Se identifican algunos de los siguientes escenarios de riesgo de accidente en la vivienda</div>
                        <select class="input_general" name="88_RiesgoAccidente">
                        <?php
                                valores($consulta->DatesOfTables('88_RiesgoAccidente'));
                            ?></select>
                        

                        
                        <div class="sub-title"> <b>89.</b>   Desde la vivienda se puede acceder fácilmente a:</div>
                        <select class="input_general" name="89_AccesoServicios">
                        <?php
                                valores($consulta->DatesOfTables('89_AccesoServicios'));
                            ?></select>

                        <div class="sub-title"> <b>90.</b>  ¿Cuál fuente de energía o combustible que se usa para cocinar?</div>
                        <select class="input_general selects" name="90_FuenteEnergiaCocinar" data-target="90t_90v">
                        <?php
                                valores($consulta->DatesOfTables('90_FuenteEnergiaCocinar'));
                            ?></select>

                        <div class="sub-title dnone" id="90t"> <b>90.2.</b> Cual?</div>
                        <input type="text" class="input_general dnone" name="90_2_Cual" id="90v">

                        <div class="sub-title"> <b>91.</b> ¿Se observa cerca de la vivienda o dentro de ella s criaderos o reservorios 
                            que pueden favorecer la presencia de vectores transmisores de enfermedades?</div>
                        
                        <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="91_CriaderosVectores" value="SI" onclick="MostrarDiv('91_2t','91_2v','SI')">
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="91_CriaderosVectores" value="NO" onclick="MostrarDiv('91_2t','91_2v','NO')">
                                <label >NO</label><br>
                            </div>
                        </div>

                        <div class="sub-title dnone" id="91_2t"> <b>91.2.</b> Cual?</div>
                        <input type="text" class="input_general dnone" id="91_2v" name="91_2_Cuales">
                        

                    </div>
                </div>

                <!-- SubSeccion 4.2  Oficios u ocupaciones que se desarrollan en la vivienda o su entorno inmediato (peridomicilio) -->
                <div class="sub_section1_1">
                    <div class="titulo_seccion">4.2  Oficios u ocupaciones que se desarrollan en la vivienda o su entorno inmediato (peridomicilio)</div>

                    <div class="content_section1_1">

                        <div class="sub-title"> <b>92.</b>  Observe si cerca de la vivienda hay alguno de los siguientes:</div>
                        <select class="input_general " name="92_PresenciaPlagas">
                        <?php
                                valores($consulta->DatesOfTables('92_PresenciaPlagas'));
                            ?></select>
    
                        <div class="sub-title "> <b>92.2.</b>Especifique </div>
                        <input type="text" class="input_general" name="92_2_Especifique">

                        <div class="sub-title"> <b>93.</b>  ¿Al interior de la vivienda se realiza alguna actividad económica?</div>
                       
                        <div class="checks">
                            <div class="check">
                                <input type="radio" id="" name="93_ActEconomica" value="SI" >
                                <label >SI</label><br>
                            </div>
                            <div class="check">
                                <input type="radio" id="" name="93_ActEconomica" value="NO" >
                                <label >NO</label><br>
                            </div>
                        </div>
    
                        <div class="sub-title-large"> <b>94.</b>  Señale los animales que conviven con la familia dentro de la vivienda o en su entorno inmediato, e indique cuantos son:</div>
                        <select class="input_general selects" name="94_AnimalesConvivencia" data-target="94t_94v">
                        <?php
                                valores($consulta->DatesOfTables('94_AnimalesConvivencia'));
                            ?></select>

                        <div class="sub-title dnone" id="94t"> <b>94.2.</b> Cual? </div>
                        <input type="text" class="input_general dnone" name="94_2_Cual" id="94v">
    
                        <div class="sub-title"> <b>94.3.</b> Registrar Cantidad</div>
                        <input type="number" class="input_general" name="94_3_RegistrarCantidad">

                       

                    </div>


                        


                </div>

                <div class="sub_section1_1">
                    <div class="titulo_seccion">1.2 Agua y saneamiento básico</div>

                    <div class="content_section1_1">

                        <div class="sub-title"> <b>95.</b>  ¿Cuál es la principal fuente de abastecimiento de agua para consumo humano en la vivienda?</div>
                        <select class="input_general selects" name="95_FuenteAgua" data-target="95t_95v">
                        <?php
                                valores($consulta->DatesOfTables('95_FuenteAgua'));
                            ?></select>

                        <div class="sub-title dnone" id="95t"> <b>95.2.</b> Cual?</div>
                        <input type="text" class="input_general dnone" name="95_2_Cual" id="95v">
    
                        <div class="sub-title"> <b>96.</b> ¿Cuál es el sistema de disposición de excretas en la vivienda? </div>
                        <select class="input_general selects" name="96_SistExcretas" data-target="96t_96v">
                        <?php
                                valores($consulta->DatesOfTables('96_SistExcretas'));
                            ?></select>

                        <div class="sub-title dnone" id="96t"> <b>96.2.</b> Cual?</div>
                        <input type="text" class="input_general dnone" name="96_2_Cual" id="96v">    

                        <div class="sub-title"> <b>97.</b> ¿Cuál es el sistema de disposición de aguas residuales domésticas en la vivienda?</div>
                        <select class="input_general selects" name="97_SistAguasResid" data-target="97t_97v">
                        <?php
                                valores($consulta->DatesOfTables('97_SistAguasResid'));
                            ?></select>

                        <div class="sub-title dnone" id="97t"> <b>97.2.</b> Cual?</div>
                        <input type="text" class="input_general dnone" name="97_2_Cual" id="97v">
    
                        <div class="sub-title"> <b>98.</b>  ¿Como se realiza la disposición final de los residuos sólidos ordinarios de la vivienda?</div>
                        <select class="input_general selects" name="98_ResiduosSolidos" data-target="98t_98v">
                        <?php
                                valores($consulta->DatesOfTables('98_ResiduosSolidos'));
                            ?></select>

                        <div class="sub-title dnone" id="98t"> <b>98.2.</b> Cual?</div>
                        <input type="text" class="input_general dnone" name="98_2_Cual" id="98v">


                        <button type="submit" class="input_general" name="" >FINALIZAR</a>

                        
                    </div>


                        


                </div>

            </div>


        </section>

    </form>
</body>

<script src="Js/Mostrar_Elementos.js"></script>
<script src="Js/Js.js"></script>
</html>