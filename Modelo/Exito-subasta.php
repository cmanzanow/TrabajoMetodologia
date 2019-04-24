<?php
    class subastar
    {
        private $db;
        private $login;
        private $resultado;

        public function __construct()
        {
            require_once("../Modelo/conectar_bd.php");

            $this->db=conectar_bd::conexion();

            $this->login=array();

            $this->resultado=array();
        }

        public function get_subastar()
        {
            $id=$_GET["usuario"];
            $id=rtrim($id);
            $t=0;

            $consulta=$this->db->query("SELECT codigo, origen, destino, fecha, salida, asiento, empresa, estado FROM subastar WHERE nickname='$id';");

            while($filas=$consulta->fetch(PDO::FETCH_ASSOC))
            {
                $this->login[]=$filas;
            }

            return $this->login;            
        }

    }
?>