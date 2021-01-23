<?php
    require_once("autoload.php");

    class Persona extends Conexion
    {
        private $nombre;
        private $apellido;
        private $conexion;

        public function __construct() {
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conexion();
        }

        public function agregarPersona(string $nombreInt, string $apellidoInt) {
            $this->nombre = $nombreInt;
            $this->apellido = $apellidoInt;

            $sql = "INSERT INTO persona(nombre, apellido) VALUES(?,?)";
            $insert = $this->conexion->prepare($sql);
            $arrayDatos = array($this->nombre,$this->apellido);
            $resAgregar = $insert->execute($arrayDatos);
            return $resAgregar;
        }

        public function obtenerPersonas() {
            $sql = "SELECT * FROM persona";
            $execute = $this->conexion->query($sql);
            $request = $execute->fetchall(PDO::FETCH_ASSOC);
            return $request;
        }
    }
    
?>