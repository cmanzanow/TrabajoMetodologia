<?php

    class rut
    {
        private $db;
        private $login;
        private $resultado;

        public function __construct()
        {
            require_once("../modelo/conectar_bd_transito.php");

            $this->db=conectar_bd::conexion();

            $this->login=array();

            $this->resultado=array();
        }

        public function get_rut($rut)
        {
            $id=$_POST["user"];
            $id=rtrim($id);
            $pw=$_POST["password"];
            $pw=rtrim($pw);

            $t=0;

            $consulta=$this->db->query("SELECT rut, name, lastname, address, phone FROM solicitante WHERE rut='$rut' and password='$pw';");

            while($filas=$consulta->fetch(PDO::FETCH_ASSOC))
            {
                $this->login[]=$filas;
            }

            foreach($this->login as $lol):
                $t++;
            endforeach;

            return $t;            
        }

        public function valida_rut()
        {
            $rut=$_POST["user"];
 
            $rut = str_replace(                                        /* si encuentra un simbolo lo borra */
                array("\\", "¨", "º", "-", "~",
                     "#", "@", "|", "!", "\"",
                     "·", "$", "%", "&", "/",
                     "(", ")", "?", "'", "¡",
                     "¿", "[", "^", "<code>", "]",
                     "+", "}", "{", "¨", "´",
                     ">", "< ", ";", ",", ":",
                    ".", " ", "=", "_"),
                '',
                $rut
            );

            $rut = trim($rut);

            if (strlen($rut)>10)                                       /* si el resultado final supera las 10 cifras es invalido */
            {
                $rut=0;
                return $rut;
            }

            $aux=$rut;

            $codigo=substr($rut,-1);
            $rut = substr ($rut, 0, strlen($rut) - 1);
            $rut = (int)$rut;

            if(is_numeric($rut))
            {
                $coaux=0;
                $suma=0;
                $i=2;

                do
                {
                    $coaux=$rut%10;

                    $rut=$rut/10;
                    $rut=(int)$rut;

                    $suma=$suma+($coaux*$i);

                    $i=$i+1;

                    if($i>7)
                    {
                        $i=2;
                    }
            
                }while($rut>0);
            }
            else
            {
                $rut=0;                                     /* si el numero resultado no es numerico no es valido */
                return $rut;
            }

            $resto=$suma%11;
            $total=11-$resto;

            if($total==11)
            {
                $total=0;
            }

            if($codigo=='k' || $codigo=='K')
            {
                echo $codigo . "   " . $total . "<br>";
                $codigo=10;
            }

            if($total==$codigo)
            {
                /*echo "es valido";*/
                $rut=1;
            }
            else
            {
                /*echo "no es valido";*/
                $rut=0;
            }

            return $aux;
        }
    }
