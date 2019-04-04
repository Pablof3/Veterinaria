<?php
namespace Core
{
    class Veterinario
    {
        public $id_Veterinario;    
        public $nombre;    
        public $apellido;       
        public $especialidad;    
        public $fechaRegistro; 

        /** @var Array $NumContacto Arreglo de Numeros de contacto de veterinario */
        public $NumContacto;
        /** @var Array $Direccion Arreglo de Direcciones de veterinario */
        public $Direccion;   
    }
}