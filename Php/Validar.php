<?php


require_once "Conexion.php";

session_start();

$_SESSION['Cedula']=null;
$_SESSION['Nombre']=null;
$_SESSION['rol']=null;

$Cedula = $_POST['cedula'];

$Sql = "SELECT * FROM users WHERE idusers=$Cedula";
$Consulta = mysqli_query($mysqli,$Sql);

if($result=mysqli_fetch_assoc($Consulta)){

    $_SESSION['Cedula']=$result['idusers'];
    $_SESSION['Nombre']=$result['Nombre'];
    $_SESSION['rol']=$result['id_rol'];

    if($_SESSION['rol']==1){

        echo "<script>window.location.href='Vistas/Modelo_Index.php'</script>";

    }elseif($_SESSION['rol']==2){

        echo "<script>window.location.href='Vistas/Admin.php'</script>";

    }
}else{

   // echo "<script>window.location.href='../Index.html'</script>";

}

?>