<?php

    require_once("../Modelo/0.3 validar registro.php");

    $iniciar=new validar();
    $inicio=$iniciar->get_usuario();

    $iniciar2=new validar();
    $inicio2=$iniciar2->valida_usuario();

    $inicio=$inicio+$inicio2;

    echo json_encode($inicio);
   
?>