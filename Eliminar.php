<?php
include("conexion.php");
$con=conectar();

$ID_ANIMAL=$_GET['id'];

$sql="DELETE FROM caracteristicas WHERE ID_ANIMAL='".$ID_ANIMAL."'";
$query=mysqli_query($con,$sql);

if($query){
    header("location: Prueba.php");
}


?>