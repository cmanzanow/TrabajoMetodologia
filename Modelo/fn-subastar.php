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
        
        public function asd()
        {
            $codigo=@$_POST['id'];
            $codigo=rtrim($codigo);
            $nickname=@$_POST['rut'];
            $nickname=rtrim($nickname);
  

            $consulta=$this->db->query("SELECT nickname, codigo, origen, destino, fecha, salida, asiento, empresa FROM registro R, pasajes P WHERE P.codigo='$codigo' AND R.rut='$nickname';");
            

            while($filas=$consulta->fetch(PDO::FETCH_ASSOC))
            {
                $this->login[]=$filas;
            }

            return $this->login;            
        }
        
        public function set_subastar($inicio){
            
            /*$codigo=@$_POST['codigo']; como rescatar una variable desde json
            $codigo=rtrim($codigo);
            $origen=@$_POST['origen'];
            $origen=rtrim($origen);
            $destino=@$_POST['destino'];
            $destino=rtrim($destino);
            $fecha=@$_POST['fecha'];
            $fecha=rtrim($fecha);
            $salida=@$_POST['salida'];
            $salida=rtrim($salida);
            $asiento=@$_POST['asiento'];
            $asiento=rtrim($asiento);
            $empresa=@$_POST['empresa'];
            $empresa=rtrim($empresa);
            $estado="activo";
            $nickname=@$_POST['nickname'];
            $nickname=rtrim($nickname);*/
            
            foreach($inicio as $ini):
                $codigo=$ini['codigo'];
                $codigo=rtrim($codigo);
                $origen=$ini['origen'];
                $origen=rtrim($origen);
                $destino=$ini['destino'];
                $destino=rtrim($destino);
                $fecha=$ini['fecha'];
                $fecha=rtrim($fecha);
                $salida=$ini['salida'];
                $salida=rtrim($salida);
                $asiento=$ini['asiento'];
                $asiento=rtrim($asiento);
                $empresa=$ini['empresa'];
                $empresa=rtrim($empresa);
                $estado="En Subasta";
                $nickname=$ini['nickname'];
                $nickname=rtrim($nickname);
            endforeach;
            

            $sql="INSERT INTO subastar (codigo, origen, destino, fecha, salida, asiento, empresa, estado, nickname) VALUES (:codigo, :origen, :destino, :fecha, :salida, :asiento, :empresa, :estado, :nickname)";

            $resultado=$this->db->prepare($sql);

            $resultado->execute(array(":codigo"=>$codigo, ":origen"=>$origen, ":destino"=>$destino, ":fecha"=>$fecha, ":salida"=>$salida, ":asiento"=>$asiento, ":empresa"=>$empresa, ":estado"=>$estado, ":nickname"=>$nickname));
        }
    }
?>