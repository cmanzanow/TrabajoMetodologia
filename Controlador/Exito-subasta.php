<?php

    require_once("../Modelo/fn-subastar.php");
    
    if(@$_POST['id']=='' || @$_POST['rut']==''){
        echo json_encode("0");
    }
    else{
        $iniciar=new subastar();
        $inicio=$iniciar->asd();

        $iniciar2=new subastar();
        $inicio2=$iniciar2->set_subastar($inicio);
    
        echo json_encode("1");
    }

?>