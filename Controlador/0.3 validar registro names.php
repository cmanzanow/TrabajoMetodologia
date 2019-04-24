<?php

    require_once("../Modelo/0.3 validar registro.php");

    $names=@$_POST['names'];

    if($names=='')
    {
    	echo json_encode($names);
    }
    else
    {
    	$iniciar=new validar();
        $inicio=$iniciar->valida_names();

        echo json_encode($inicio);
    }

   
             	
            
    	
    


   
?>