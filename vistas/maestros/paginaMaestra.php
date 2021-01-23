<?php

class PaginaMaestra 
{
    function __construct() {

    }
    
    function __destruct() {
        
    }

    public function getHead() {
        include 'vistas/componentes/head.php';
    }

    public function getScripts() {
        include 'vistas/componentes/scripts.php';
    }

    public function getCuerpo() {
        include 'vistas/cuerpo.php';
    }
}

?>