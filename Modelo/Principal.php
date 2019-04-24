<?php
    class login
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

        public function get_login()
        {
            $id=$_POST["user"];
            $id=rtrim($id);
            $pw=$_POST["password"];
            $pw=rtrim($pw);

            $t=0;

            $consulta=$this->db->query("SELECT nickname, password, admin FROM registro WHERE nickname='$id' and password='$pw';");

            while($filas=$consulta->fetch(PDO::FETCH_ASSOC))
            {
                $this->login[]=$filas;
            }

            foreach($this->login as $lol):
                
                $t++;
            
                if($lol["admin"]=='1'){
                    $t=2;
                }
                
            endforeach;

            return $t;            
        }

    }
?>