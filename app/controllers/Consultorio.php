<?php
class Consultorio extends Controller
{
    private $mConsultorio;
    public function __construct() 
    {
       $this->mConsultorio=$this->modelo('mConsultorio');
    }
    public function Registrar()
    {
        $consultorio=new Core\Consultorio;
        $consultorio->id_Clinica=$_POST['Consultorio']['id_Clinica'];
        $consultorio->nombre=$_POST['Consultorio']['nombre'];
        $consultorio->descripcion=$_POST['Consultorio']['descripcion'];
        $this->mConsultorio->Insertar($consultorio);  
    }
    public function Actualizar()
    {
        $consultorio=new Core\Consultorio;
        $consultorio->id_Consultorio=$_POST['Consultorio']['id_Cosultorio'];
        $consultorio->id_Clinica=$_POST['Consultorio']['id_Clinica'];
        $consultorio->nombre=$_POST['Consultorio']['nombre'];
        $consultorio->descripcion=$_POST['Consultorio']['descripcion'];
        $this->mConsultorio->Actualizar($consultorio);  
    }
    public function Eliminar()
    {
     
        $this->mConsultorio->Eliminar(2);  
    }

    public function vRegistrar()
    {
        $this->vista('Consultorio/vRegistrar');
    }
}

?>