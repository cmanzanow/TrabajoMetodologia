<?php
    
    require_once("../Modelo/fn-subastar.php");

    $iniciar=new subastar();
    $subastar=$iniciar->get_subastar();

    require_once("../Vista/Subastar.php");

?>