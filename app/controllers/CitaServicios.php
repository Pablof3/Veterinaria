<?php
class CitaServicios extends Controller
{
    private $mCitaServicios;
    public function __construct() 
    {
       $this->mCitaServicios=$this->modelo('mCitaServicios');
    }
    public function Registrar()
    {
        $citaservicios=new Core\CitaServicios;
        $citaservicios->id_Cita=$_POST['CitaServicios']['id_Cita'];
        $citaservicios->id_Servicio=$_POST['CitaServicios']['id_Servicio'];
        $this->mCitaServicios->Insertar($citaservicios);  
    }
    public function Actualizar()
    {
        $citaservicios=new Core\CitaServicios;
        $citaservicios->id_CitaServicios=$_POST['CitaServicios']['id_CitaServicios'];
        $citaservicios->id_Cita=$_POST['CitaServicios']['id_Cita'];
        $citaservicios->id_Servicio=$_POST['CitaServicios']['id_Servicio'];
        $this->mCitaServicios->Actualizar($citaservicios);  
    }
    public function Eliminar()
    {
     
        print_r( $this->mCitaServicios->Eliminar(1));  
    }
}

?>