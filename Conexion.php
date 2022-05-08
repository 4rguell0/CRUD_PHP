<?php

function conectar(){
    $SERVIDOR='localhost';
    $USUARIO='root';
    $PASS='';
    $bd='gatos';

    $conexion=mysqli_connect($SERVIDOR, $USUARIO, $PASS);
    mysqli_select_db($conexion, $bd);
    return $conexion;
}

?>