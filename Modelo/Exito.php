 <?php

    class registrar
    {
        private $db;
        private $login;

        public function __construct()
        {
            require_once("../Modelo/conectar_bd.php");

            $this->db=conectar_bd::conexion();
            $this->login=array();
        }

        public function set_registro()
        {
            $id = $_POST['nickname'];
            $id=rtrim($id);

            $rut = $_POST['rut'];
            $rut=rtrim($rut);

            $email = $_POST['email'];
            $email=rtrim($email);

            $name2 = $_POST['name'];
            $name2=rtrim($name2);

            $lastname = $_POST['lastname'];
            $lastname=rtrim($lastname);

            $address = $_POST['address'];
            $address=rtrim($address);

            $gender = $_POST['r1'];

            $password = $_POST['password'];
            $password=rtrim($password);

            $phone = $_POST['phone'];
            $phone=rtrim($phone);
            
            $admin = "0";

            $sql="INSERT INTO registro (nickname, rut, email, name, lastname, address, gender, password, phone) VALUES (:id, :rut, :email, :name, :lastname, :address, :gender, :password, :phone, :admin)";

            $resultado=$this->db->prepare($sql);

            $resultado->execute(array(":id"=>$id, ":rut"=>$rut, ":email"=>$email, ":name"=>$name2, ":lastname"=>$lastname, ":address"=>$address, ":gender"=>$gender, ":password"=>$password, ":phone"=>$phone, ":admin"=>$admin));

        }

    }

?>

