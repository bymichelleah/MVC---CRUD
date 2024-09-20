<?php
class ClaseModeloLogin{

    private $cone;

    function __construct($conexion){
        $this->cone = $conexion;
    }

    function MetodoListar(){
        $conexion = $this->cone;
        $query = "SELECT * FROM users";
        $datos = mysqli_query($conexion, $query);

        return $datos;
    }

    function MetodoCrear($nombre,$apellido){

        $query = "INSERT INTO users (nombre,apellido) VALUES ('$nombre','$apellido') ";
        mysqli_query($this->cone,$query);
    }

    function MetodoEliminar($id){
        $query = "DELETE FROM users WHERE id = $id";
        mysqli_query($this->cone,$query);
    }

    function MetodoObtener($id){

        $query = "SELECT * FROM users WHERE id = $id";
        $resutado = mysqli_query($this->cone,$query);
        return mysqli_fetch_assoc($resutado);
    }

    function MetodoActualizar($id,$nombre,$apellido){
        $query = "UPDATE users SET nombre = '$nombre', apellido = '$apellido' WHERE id = $id";
        mysqli_query($this->cone,$query);
    }
}
