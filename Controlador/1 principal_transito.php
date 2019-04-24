<?php

    require_once("../modelo/1 principal_transito.php");

    $id=$_POST["user"];

    $iniciar2=new rut();
    $inicio2=$iniciar2->valida_rut();

    $iniciar=new rut();
    $inicio=$iniciar->get_rut($inicio2);

    

    if($inicio2==0)
    {
        require_once("../vista/0.1 error_rut_transito.php");
    }
    else
    {
        if($inicio>0)
        {
            require_once("../vista/1 principal_transito.php");
        }

        if($inicio==0)
        {
            require_once("../vista/1 principal_transito_vacio.php");
        }
    }

?>