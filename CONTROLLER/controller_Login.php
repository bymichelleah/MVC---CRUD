<?php

require_once("c:/xampp/htdocs/mvc-crud/CONFIG/conexion.php");
require_once("c:/xampp/htdocs/mvc-crud/MODEL/model_Login.php");

$conne = $conexion;
$ObjetoModelo = new ClaseModeloLogin($conne);

function ControladorListar()
{

    global $ObjetoModelo;
    return $ObjetoModelo->MetodoListar();
}

function ControladorCrear($nombre, $apellido)
{
    global $ObjetoModelo;
    return $ObjetoModelo->MetodoCrear($nombre, $apellido);
}

function ControladorEliminar($id)
{

    global $ObjetoModelo;
    return $ObjetoModelo->MetodoEliminar($id);
}

function ControladorObtener($id)
{
    global $ObjetoModelo;
    return $ObjetoModelo->MetodoObtener($id);
}

function ControladorActualizar($id, $nombre, $apellido)
{
    global $ObjetoModelo;
    return $ObjetoModelo->MetodoActualizar($id, $nombre, $apellido);
}

if ($_SERVER["REQUEST_METHOD"] == 'POST') { // Verifica si la solicitud es de tipo POST, que suele ser cuando se envían datos desde un formulario.
    
    if (isset($_POST['id'])) { // Comprueba si en el formulario POST existe un campo 'id'. Si está presente, indica que se trata de una actualización (editar un registro existente).
        
        $id = $_POST["id"]; 
        $nombre = $_POST["nombre"]; 
        $apellido = $_POST["apellido"]; // Asigna los valores enviados a través del formulario a las variables $id, $nombre y $apellido.
        
        ControladorActualizar($id, $nombre, $apellido); // Llama a la función ControladorActualizar para modificar el registro en la base de datos usando el id, nombre y apellido proporcionados.
        
    } else { // Si el campo 'id' no está presente, significa que se va a crear un nuevo registro.

        $nombre = $_POST["nombre"]; 
        $apellido = $_POST["apellido"]; // Asigna los valores de nombre y apellido enviados por el formulario a las variables $nombre y $apellido.
        
        ControladorCrear($nombre, $apellido); // Llama a la función ControladorCrear para insertar un nuevo registro en la base de datos con el nombre y apellido proporcionados.
    }

    header("Location: index.php"); // Redirige al usuario a la página principal (index.php) después de crear o actualizar el registro.
    
    exit; // Termina la ejecución del script para evitar que se siga procesando el código.
}

if (isset($_GET["eliminar"])) { 
    // Verifica si en la URL hay un parámetro 'eliminar'. Si está presente, indica que se va a eliminar un registro.
    $id = $_GET["eliminar"]; 
    // Asigna el valor del parámetro 'eliminar' (el id del registro) a la variable $id.
    ControladorEliminar($id); 
    // Llama a la función ControladorEliminar para eliminar el registro de la base de datos con el id proporcionado.
    header("Location: index.php"); 
    // Redirige al usuario a la página principal (index.php) después de eliminar el registro.
    exit; 
    // Termina la ejecución del script para evitar que se siga procesando el código.
}
