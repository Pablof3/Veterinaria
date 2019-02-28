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
        $cargo->nombre='Cirujano';
        $this->mCargo->Insertar($cargo);  
    }
}