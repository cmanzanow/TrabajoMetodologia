<?php

    require_once("../Modelo/0.3 validar registro.php");

    $rut=@$_POST['rut'];

    if($rut=='')
    {
    	echo json_encode($rut);
    }
    else
    {
    	$iniciar2=new validar();
        $inicio2=$iniciar2->valida_rut();

        if($inicio2=="0")
        {
        	echo json_encode(1); 
        }
        else
        {
        	$iniciar=new validar();
            $inicio=$iniciar->get_rut($inicio2);

            echo json_encode($inicio); 
        }
    }   
?>
