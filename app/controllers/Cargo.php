<?php
require "../app/core/NamespaceCore.php";
class Cargo extends Controller
{
    private $mCargo;
    public function __construct() {
        //$this->mCargo = $this->modelo('mCargo');
    }

    public function Registrar()
    {
        $cargo=new Core\Cargo;
        //$mascota->id_Mascota=1;
        $cargo->id_Cargo=1;
        $cargo->nombre=$_POST['Cargo']['nombre'];
        $this->mCargo->Insertar($cargo);  
    }
    public function Actualizar()
    {
        $cargo=new Core\Cargo;
        $cargo->id_Cargo=2;
        $cargo->nombre=$_POST['Cargo']['nombre'];
        $this->mCargo->Actualizar($cargo);  
    }
    public function Eliminar()
    {
       $this->mCargo->Eliminar();  
    }

    public function vRegistrar()
    {
        $this->vista('Cargo/vRegistrar');
    }
}