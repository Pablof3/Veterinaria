<?php
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
        $numContacto->id_NumContacto=$_POST['NumContacto']['id_NumContacto'];
        $numContacto->id_NumPropietario=$_POST['NumContacto']['id_NumPropietario'];
        $numContacto->numero=$_POST['NumContacto']['numero'];
        $numContacto->tipo=$_POST['NumContacto']['tipo'];
        $this->mNumContacto->Insertar($numContacto);
    }
    public function Actualizar()
    {
        $numContacto=new Core\NumContacto;
        $numContacto->id_NumContacto=$_POST['NumContacto']['id_NumContacto'];
        $numContacto->id_NumPropietario=$_POST['NumContacto']['id_NumPropietario'];
        $numContacto->numero=$_POST['NumContacto']['numero'];
        $numContacto->tipo=$_POST['NumContacto']['tipo'];
        $this->mNumContacto->Actualizar($numContacto);
    }

    public function Eliminar()
    {
        $this->mNumContacto->Eliminar(2);
    }
}

?>