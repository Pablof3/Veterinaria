<?php 
//Cargar Librerias
require_once 'config/configSystem.php';

//require_once 'lib/Database.php';
//require_once 'lib/Controller.php';
//require_once 'lib/Core.php';

//AUTOLOAD PHP
spl_autoload_register(function($nombreClase)
{
    //carga clases de Lib
    require_once 'lib/' . $nombreClase . '.php';
    
});
// spl_autoload_register(function ($nombre)
// {
//     //Craga clases de core
//     require_once 'core/'.$nombre.'.php';
// });