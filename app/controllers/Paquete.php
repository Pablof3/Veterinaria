<?php
require "../app/core/NamespaceCore.php";
class Paquete extends Controller
{
    private $mPaquete;

    public function __construct() {
        $this->mPaquete=$this->modelo('mPaquete');
    }

    public function Registrar()
    {
        $paquete=new Core\Paquete;
        $paquete->id_Paquete=1;
        $paquete->nombre='Premium Dog';
        $paquete->precio=40.50;
        $paquete->descripcion='Paquete especializado en el control total de los Perros';
        $paquete->idServicios=[0=>1,1=>2,2=>3];
        $this->mPaquete->Insertar($paquete);
    }

    public function Actualizar()
    {
        $paquete=new Core\Paquete;
        $paquete->id_Paquete=5;
        $paquete->nombre='Premium Cat';
        $paquete->precio=70.00;
        $paquete->descripcion='Paquete especializado en el control total de los Gato';
        $paquete->idServicios=[0=>2, 1=>1, 2=>4];
        $this->mPaquete->Actualizar($paquete);
    }

    public function Eliminar()
    {
        $this->mPaquete->Eliminar(1);
    }
}

?>