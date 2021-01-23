<?php
    require_once("../modelos/autoload.php");
    $persona = new Persona();
    $personas = $persona->obtenerPersonas();
    echo json_encode($personas);
?>