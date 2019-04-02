<?php
namespace Core
{  
    class Cliente
    {
        public $id_Cliente;  
        public $nombre;  
        public $apellido;  
        public $ci;
        public $nit;  
        public $fechaRegistro;  

        /** @var Array $NumContacto Arreglode Numeros de contacto de Cliente */
        public $NumContacto;
        /** @var Array $Direccion Arreglo de Direcciones de Clienet */
        public $Direccion;
    }
}