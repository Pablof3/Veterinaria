<?php
require "../app/core/NamespaceCore.php";
class Servicio extends Controller 
{
    private $mServicio;
    public function __construct() {
        $this->mServicio=$this->modelo('mServicio');
    }
    public function Registrar()
    {
        $servicio=new Core\Servicio;
        $servicio->id_Servicio=1;
        $servicio->nombre='Peluqueria';
        $servicio->descripcion='Peluqueria Canina';
        $servicio->precio=30.00;
        $this->mServicio->Insertar($servicio);
    }

    public function Actualizar()
    {
        $servicio=new Core\Servicio;
        $servicio->id_Servicio=1;
        $servicio->nombre='Dermatologia';
        $servicio->descripcion='Dermatologia';
        $servicio->precio=50.00;
        $this->mServicio->Actualizar($servicio);
    }
    
    public function Eliminar()
    {
        $this->mServicio->Eliminar(1);
    }
}

?>