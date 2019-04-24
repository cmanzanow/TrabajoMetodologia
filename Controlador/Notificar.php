<?php
    
    require_once("../Modelo/Pasajes.php");

    $iniciar=new pasaje();
    $pasaje=$iniciar->get_pasaje();

    require_once("../Vista/Notificar.php");

?>