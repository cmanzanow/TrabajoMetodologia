<?php

    require_once("../Modelo/0.3 validar registro.php");

    $address=@$_POST['address'];

    if($address=='')
    {
    	echo json_encode($address);
    }
    else
    {
    	$iniciar=new validar();
        $inicio=$iniciar->valida_address();

        echo json_encode($inicio);
    }

   
             	
            
    	
    


   
?>