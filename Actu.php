<?php
include ("Conexion.php");
$con=conectar();

$ID_ANIMAL=$_POST['ID_ANIMAL'];
$NOMBRE=$_POST['NOMBRE'];
$COLOR=$_POST['COLOR'];
$RAZA=$_POST['RAZA'];    


$sql="UPDATE caracteristicas SET NOMBRE='".$NOMBRE."',COLOR='".$COLOR."',RAZA='".$RAZA."' WHERE ID_ANIMAL='".$ID_ANIMAL."'";
$query=mysqli_query($con,$sql);

iF ($query) {
    header("location:Prueba.php");
}

?>