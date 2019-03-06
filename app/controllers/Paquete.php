<?php
require_once "../app/core/NamespaceCore.php";
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
        $this->mPaquete->Insertar($paquete);
    }

    public function Actulizar()
    {
        $paquete=new Core\Paquete;
        $paquete->id_Paquete=1;
        $paquete->nombre='Premium Cat';
        $paquete->precio=70.00;
        $paquete->descripcion='Paquete especializado en el control total de los Gato';
        $this->mPaquete->Actulizar($paquete);
    }

    public function Eliminar()
    {
        $this->mPaquete->Eliminar(1);
    }
}

?>