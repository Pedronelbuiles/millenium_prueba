<?php 
	class Conexion
	{
        private $host = "localhost";
        private $usuario = "root";
        private $contrasena = "";
        private $baseDeDatos = "personas";
        private $puerto = 3306;
        private $socket = "";
        private $enlace = "";
        private $conexion;
        
		function __construct()
		{
            $conectionString = "mysql:host=".$this->host.";dbname=".$this->baseDeDatos.";charset=utf8";
            try {
                $this->conexion = new PDO($conectionString,$this->usuario,$this->contrasena);
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (\Throwable $e) {
                $this->conexion = 'Tenemos un error en la conexión';
                echo "ERROR: ".$e->getMessage();
            }
        }
        
        public function conexion() {
            return $this->conexion;
        }

	}
 ?>