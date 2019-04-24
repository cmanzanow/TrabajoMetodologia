<?php
    
    require_once("../Modelo/Principal.php");
    
    $iniciar=new login();
    $inicio=$iniciar->get_login();
    
    if($inicio==1){
        $id=$_POST['user'];
        $id=rtrim($id);
        $pw=$_POST['password'];
        $pw=rtrim($pw);
        require_once("../Vista/Principal.php");
    }
    else if($inicio==2){
        $id=$_POST['user'];
        $id=rtrim($id);
        $pw=$_POST['password'];
        $pw=rtrim($pw);
        require_once("../Vista/Principal-admin.php");
    }
    else{
        require_once("Error.php");
    } 

?>