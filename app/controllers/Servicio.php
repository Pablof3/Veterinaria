<?php
class Servicio extends Controller 
{
    private $mServicio;
    public function __construct() {
        $this->mServicio=$this->modelo('mServicio');
    }
    public function Registrar()
    {
        $servicio=new Core\Servicio;
        $servicio->id_Servicio=$_POST['Servicio']['id_Servicio'];
        $servicio->nombre=$_POST['Servicio']['nombre'];
        $servicio->descripcion=$_POST['Servicio']['descripcion'];
        $servicio->precio=$_POST['Servicio']['precio'];
        $this->mServicio->Insertar($servicio);
    }

    public function Actualizar()
    {
        $servicio=new Core\Servicio;
        $servicio->id_Servicio=$_POST['Servicio']['id_Servicio'];
        $servicio->nombre=$_POST['Servicio']['nombre'];
        $servicio->descripcion=$_POST['Servicio']['descripcion'];
        $servicio->precio=$_POST['Servicio']['precio'];
        $this->mServicio->Actualizar($servicio);
    }
    
    public function Eliminar()
    {
        $this->mServicio->Eliminar(1);
    }
}

?>