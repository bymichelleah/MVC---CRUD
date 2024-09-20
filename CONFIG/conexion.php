<?php

$servidor="localhost";
$db = "senati";
$user = "root";
$clave = "";

function conexion($servidor,$user,$clave,$db){

    $conexion = mysqli_connect($servidor,$user,$clave,$db);
    return $conexion;

}

$conexion = conexion($servidor,$user,$clave,$db);
