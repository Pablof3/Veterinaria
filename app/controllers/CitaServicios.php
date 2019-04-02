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
        $citaservicios->id_Cita=2;
        $citaservicios->id_Servicio=2;
        $this->mCitaServicios->Insertar($citaservicios);  
    }
    public function Actualizar()
    {
        $citaservicios=new Core\CitaServicios;
        $citaservicios->id_CitaServicios=1;
        $citaservicios->id_Cita=4;
        $citaservicios->id_Servicio=4;
        $this->mCitaServicios->Actualizar($citaservicios);  
    }
    public function Eliminar()
    {
     
        print_r( $this->mCitaServicios->Eliminar(1));  
    }
}

?>