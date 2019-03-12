<?php
//Nombre Sitio
define('NOMBRE_SITIO', 'Veterinaria');

//Configuracion Base de Datos
define('DB_HOST','173.247.251.60');  //base de datos
define('DB_PORT','3306');          //Puerto de conexion
define('DB_USER','solidevt_veterinaria_bd');       //usuario de base de datos
define('DB_PASSWORD','solidev');       //contraseña de usuario de base de datos
define('DB_NAME_BD','solidevt_veterinaria_bd');   //nombre de base de datos

//Configuracion CONTROLADOR y METODO [DEFAULT]
define('CONTROLLER','Dashboard');   //Controller
define('METHOD','index');           //Method

//Ruta App
define('RUTA_APP', dirname(dirname(__FILE__)));

//URL
define('RUTA_URL', 'http://'.$_SERVER['HTTP_HOST'].'/Veterinaria'); //Cambiar a Nombre de Proyecto


?>