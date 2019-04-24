<?php

    require_once("../Modelo/0.3 validar registro.php");

    $email=@$_POST['email'];
    
    if($email=='')
    {
    	echo json_encode($email);
    }
    else
    {
    	  $iniciar=new validar();
        $inicio=$iniciar->valida_email();

        
        if(strlen($email)>39)
        {
            echo json_encode(1);
        }
        else 
        {
            if($inicio)
            {
                $iniciar2=new validar();
                $inicio2=$iniciar2->get_email();

                if($inicio2>0)
                {
                    echo json_encode(1);
                }
                else
                {
                    echo json_encode(0);
                }
            }
            else
            {
                echo json_encode(1);
            }
        	  
        }        
    }  
?>