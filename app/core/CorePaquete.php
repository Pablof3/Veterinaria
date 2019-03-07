<?php
namespace Core
{
    class Paquete
    {
        public $id_Paquete;
        public $nombre;
        public $precio;
        public $descripcion;
        public $fechaRegistro;

        /** @var int[] $idServicios Arreglo de idServios vinculados a un Paquete */
        public $idServicios;
    }
}