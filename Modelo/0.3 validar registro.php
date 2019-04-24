<?php

    class validar
    {
        private $db;
        private $login;

        public function __construct()
        {
            require_once("../Modelo/conectar_bd.php");

            $this->db=conectar_bd::conexion();

            $this->login=array();
        }

        public function get_usuario()
        {
            $id=@$_POST['id'];

            $consulta=$this->db->query("SELECT nickname FROM registro WHERE nickname='$id';");

            while($filas=$consulta->fetch(PDO::FETCH_ASSOC))
            {
                $this->login[]=$filas;
            }

            $t=0;

            foreach($this->login as $lol):
                $t++;
            endforeach;

            return $t;  
        }

        public function valida_usuario()
        {
            $id=@$_POST['id'];
            $error=0;

            if (strlen($id)<3 || strlen($id)>30)
            { 
                $error++;
            }
            
            $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.-_"; 

            for ($i=0; $i<strlen($id); $i++)
            { 
                if (strpos($permitidos, substr($id,$i,1))===false)
                { 
                    $error++;

                    return $error;
                } 
            }

            return $error;
        } 
   

        public function get_rut($rut)
        {
            $t=0;

            $consulta=$this->db->query("SELECT rut FROM registro WHERE rut='$rut';");

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
            $rut=@$_POST['rut'];
 
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
            $error=0;

            
            if (strlen($rut)>10 || strlen($rut)<3)                                       
            {
                return $error;
            }

            $aux=$rut;

            $codigo=substr($rut,-1);
            $rut = substr ($rut, 0, strlen($rut) - 1);

            $permitidos = "1234567890"; 

            for ($i=0; $i<strlen($rut); $i++)
            { 
                if (strpos($permitidos, substr($rut,$i,1))===false)
                { 
                    return $error;
                } 
            }

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
                return $error;
            }

            $resto=$suma%11;
            $total=11-$resto;

            if($total==11)
            {
                $total=0;
            }

            if($codigo=='k' || $codigo=='K')
            {
                $codigo=10;
            }


            if($total==$codigo)
            {
                return $aux;
            }
            else
            {    
                return $error;
            }
        }

        public function get_email()
        {
            $email=@$_POST['email'];

            $consulta=$this->db->query("SELECT email FROM registro WHERE email='$email';");

            while($filas=$consulta->fetch(PDO::FETCH_ASSOC))
            {
                $this->login[]=$filas;
            }

            $t=0;

            foreach($this->login as $lol):
                $t++;
            endforeach;

            return $t;  
        }

        public function valida_email()
        {
            $email=@$_POST['email'];
            $error=77;

            $matches = null;
            return (1 === preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/', $email, $matches));
        }

        public function valida_pw()
        {
            $pw=@$_POST['pw'];
            $error=1;

            if (strlen($pw)<5 || strlen($pw)>30)
            { 
                return $error;
            }
            
            $permitidos = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789.-_#$%&*+"; 

            for ($i=0; $i<strlen($pw); $i++)
            { 
                if (strpos($permitidos, substr($pw,$i,1))===false)
                {
                    return $error;
                } 
            }

            return 0;
        }

        public function valida_pw2()
        {
            $pw2=@$_POST['pw2'];
            $error=1;

            if (strlen($pw2)<5 || strlen($pw2)>30)
            { 
                return $error;
            }
            
            $permitidos = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789.-_#$%&*+"; 

            for ($i=0; $i<strlen($pw2); $i++)
            { 
                if (strpos($permitidos, substr($pw2,$i,1))===false)
                {
                    return $error;
                } 
            }

            return 0;
        }

        public function valida_names()
        {
            $names=@$_POST['names'];
            $error=1;

            if(strlen($names)>58 || strlen($names)<2)
            {
                return $error;
            }            

            $permitidos = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789.-_"; 

            for ($i=0; $i<strlen($names); $i++)
            { 
                if (strpos($permitidos, substr($names,$i,1))===false)
                { 
                    return $error;
                } 
            }

            return 0;
        }


        public function valida_lastname()
        {
            $lastname=@$_POST['lastname'];
            $error=1;

            if(strlen($lastname)>58 || strlen($lastname)<2)
            {
                return $error;
            }            

            $permitidos = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789.-_"; 

            for ($i=0; $i<strlen($lastname); $i++)
            { 
                if (strpos($permitidos, substr($lastname,$i,1))===false)
                { 
                    return $error;
                } 
            }

            return 0;
        }


        public function valida_address()
        {
            $address=@$_POST['address'];
            $error=1;

            if(strlen($address)>100 || strlen($address)<4)
            {
                return $error;
            }            

            $permitidos = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789,.-_!¿¡?#&$"; 

            for ($i=0; $i<strlen($address); $i++)
            { 
                if (strpos($permitidos, substr($address,$i,1))===false)
                { 
                    return $error;
                } 
            }

            return 0;
        }

        public function valida_phone()
        {
            $phone=@$_POST['phone'];
            $error=1;

            if(strlen($phone)>12)
            {
                return $error;
            }            

            $permitidos = "1234567890"; 

            for ($i=0; $i<strlen($phone); $i++)
            { 
                if (strpos($permitidos, substr($phone,$i,1))===false)
                { 
                    return $error;
                } 
            }

            return 0;
        }
  

    }
