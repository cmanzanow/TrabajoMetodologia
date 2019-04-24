<?php

    require_once("../Modelo/0.3 validar registro.php");

    $lastname=@$_POST['lastname'];

    if($lastname=='')
    {
    	echo json_encode($lastname);
    }
    else
    {
    	$iniciar=new validar();
        $inicio=$iniciar->valida_lastname();

        echo json_encode($inicio);
    }

   
             	
            
    	
    


   
?>