<?php

class pasaje
    {
        private $db;
        private $pasaje;

        public function __construct()
        {
            require_once("../Modelo/conectar_bd.php");

            $this->db=conectar_bd::conexion();

            $this->pasaje=array();
        }

        public function get_pasaje()
        {
            $id=$_GET["usuario"];
            $id=rtrim($id);
            $t=0;

            $consulta=$this->db->query("SELECT codigo, origen, destino, fecha, salida, asiento, empresa, estado, patente, chofer FROM pasajes WHERE estado='1';");

            while($filas=$consulta->fetch(PDO::FETCH_ASSOC))
            {
                $this->pasaje[]=$filas;
            }

            return $this->pasaje;            
        }
    }
       
?>