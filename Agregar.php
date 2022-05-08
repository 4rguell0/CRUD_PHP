<?php
include("Conexion.php");
$con=conectar();

$ID=$_POST['ID_ANIMAL'];
$NOM=$_POST['NOMBRE'];
$COL=$_POST['COLOR'];
$RAZ=$_POST['RAZA'];

$sql="insert into caracteristicas values('".$ID."','".$NOM."','".$COL."','".$RAZ."')";
$query=mysqli_query($con,$sql);

if($query){
    header("location: Prueba.php");
}


?>