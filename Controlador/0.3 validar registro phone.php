<?php

    require_once("../Modelo/0.3 validar registro.php");

    $phone=@$_POST['phone'];

    if($phone=='')
    {
    	echo json_encode($phone);
    }
    else
    {
    	$iniciar=new validar();
        $inicio=$iniciar->valida_phone();

        echo json_encode($inicio);
    }

   
             	
            
    	
    


   
?>