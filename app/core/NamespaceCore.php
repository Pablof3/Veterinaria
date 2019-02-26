<?php
//require "../app/core/MascotaC.php";
spl_autoload_register(function($nombreClase)
{
    //carga clases de Core
    require_once '../app/core/'.$nombreClase.'.php';    
});
?>