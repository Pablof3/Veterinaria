<?php
class Paquete extends Controller
{
    private $mPaquete;

    public function __construct() {
        $this->mPaquete=$this->modelo('mPaquete');
    }

    public function Registrar()
    {
        $paquete=new Core\Paquete;
        $paquete->id_Paquete=$_POST['Paquete']['id_Paquete'];
        $paquete->nombre=$_POST['Paquete']['nombre'];
        $paquete->precio=$_POST['Paquete']['precio'];
        $paquete->descripcion=$_POST['Paquete']['descripcion'];
        
        $paquete->idServicios=[0=>1,1=>2,2=>3];
        $this->mPaquete->Insertar($paquete);
    }

    public function Actualizar()
    {
        $paquete=new Core\Paquete;
        $paquete->id_Paquete=$_POST['Paquete']['id_Paquete'];
        $paquete->nombre=$_POST['Paquete']['nombre'];
        $paquete->precio=$_POST['Paquete']['precio'];
        $paquete->descripcion=$_POST['Paquete']['descripcion'];
        $paquete->idServicios=[0=>2, 1=>1, 2=>4];
        $this->mPaquete->Actualizar($paquete);
    }

    public function Eliminar()
    {
        $this->mPaquete->Eliminar(1);
    }
}

?>