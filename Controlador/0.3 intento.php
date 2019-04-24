<?php
    require_once("../modelo/0.3 intento.php");

    $id=$_POST["user"];
    $pw=$_POST["password"];

    $iniciar=new login();
    $inicio=$iniciar->get_login();
    $tipo = new login();

    if($inicio>0)
    {
        require_once("../vista/0.4 exito_restablecer.php");
    }

    if($inicio==0)
    {
        require_once("../vista/0.5 error_restablecer.php");
    }
?>