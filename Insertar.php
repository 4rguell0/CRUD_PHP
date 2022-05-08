<?php

include("Conexion.php");
$con=conectar();
$ID=$_POST['NOMBRE_CIENTIFICO'];
$NOM=$_POST['NOMBRE'];
$COL=$_POST['COLOR'];
$RAZ=$_POST['RAZA'];

$sql="insert into caracteristicas values('".$ID."','".$NOM."','".$COL."','".$RAZ."')";
$query=mysqli_query($con,$sql);

if ($query) {
    header("Location: Index.php");


}

?>