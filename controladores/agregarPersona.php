<?php
    require_once("../modelos/autoload.php");
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];

    $persona = new Persona();
    if (empty($nombre)) {
        echo "El nombre esta vacio";
    }
    else if (empty($apellido)) {
        echo "El apellido esta vacio";
    }
    else {
        $insertar = $persona->agregarPersona($nombre, $apellido);
        if ($insertar == '1') {
            echo json_encode('La persona fue ingresada correctamente');
        }
        else{
            echo json_encode('Hubo un error al ingresar a la persona');
        }
        ;
    }
?>