<?php
require "../app/core/NamespaceCore.php";
class Cargo extends Controller
{
    private $mCargo;
    public function __construct() {
        $this->mCargo = $this->modelo('mCargo');
    }

    public function Registrar()
    {
        $cargo=new Core\Cargo;
        //$mascota->id_Mascota=1;
        $cargo->id_Cargo=1;
        $cargo->nombre='Ciruja';
        $this->mCargo->Insertar($cargo);  
    }
    public function Actualizar()
    {
        $cargo=new Core\Cargo;
        $cargo->id_Cargo=2;
        $cargo->nombre=1;
        $cargo->nombre='cajero';
        $this->mCargo->Actualizar($cargo);  
    }
    public function Eliminar()
    {
       print_r( $this->mCargo->Eliminar());  
    }
}