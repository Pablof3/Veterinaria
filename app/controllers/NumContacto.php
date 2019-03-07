<?php
require "../app/core/NamespaceCore.php";
class NumContacto extends Controller 
{
    private $mNumContacto;
    public function __construct() 
    {
        $this->mNumContacto=$this->modelo('mNumContacto');
    }

    public function Registrar()
    {
        $numContacto=new Core\NumContacto;
        $numContacto->id_NumContacto=1;
        $numContacto->id_NumPropietario=1;
        $numContacto->numero='76543231';
        $numContacto->tipo=1;
        $this->mNumContacto->Insertar($numContacto);
    }
    public function Actualizar()
    {
        $numContacto=new Core\NumContacto;
        $numContacto->id_NumContacto=1;
        $numContacto->id_NumPropietario=2;
        $numContacto->numero='66543234';
        $numContacto->tipo=1;
        $this->mNumContacto->Actualizar($numContacto);
    }

    public function Eliminar()
    {
        $this->mNumContacto->Eliminar(2);
    }
}

?>