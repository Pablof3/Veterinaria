<?php
class TipoContacto extends Controller 
{
    private $mTipoContacto;
    public function __construct() {
        $this->mTipoContacto=$this->modelo('mTipoContacto');
    }
    public function Registrar()
    {
        $tipoContacto=new Core\TipoContacto;
        $tipoContacto->id_TipoContacto=$_POST['TipoContacto']['id_TipoContacto'];
        $tipoContacto->nombre=$_POST['TipoContacto']['nombre'];
        $this->mTipoContacto->Insertar($tipoContacto);
    }

    public function Actualizar()
    {
        $tipoContacto=new Core\TipoContacto;
        $tipoContacto->id_TipoContacto=$_POST['TipoContacto']['id_TipoContacto'];
        $tipoContacto->nombre=$_POST['TipoContacto']['nombre'];
        $this->mTipoContacto->Actualizar($tipoContacto);
    }

    public function Eliminar()
    {
        $this->mTipoContacto->Eliminar(1);
    }
}

?>