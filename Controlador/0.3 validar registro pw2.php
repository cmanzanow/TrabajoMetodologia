<?php

    require_once("../Modelo/0.3 validar registro.php");

    $pw=@$_POST['pw'];
    $pw2=@$_POST['pw2'];

    if($pw=='')
    {
    	if($pw2=='')
    	{
    		echo json_encode($pw2);
    	}
    	else
    	{
    		$iniciar=new validar();
            $inicio=$iniciar->valida_pw2();

            echo json_encode($inicio);
    	}
    }
    else
    {

    		$iniciar=new validar();
            $inicio=$iniciar->valida_pw2();

            if($inicio==0)
            {
            	if($pw==$pw2)
            	{
            		echo json_encode(10);
            	}
            	else
            	{
            		echo json_encode(11);
            	}
            }
            else
            {
             	echo json_encode(11);
            }
    	
    }


   
?>