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
        $consultorio->id_Clinica=2;
        $consultorio->nombre='A1';
        $consultorio->descripcion='Consultorio de atencion general';
        $this->mConsultorio->Insertar($consultorio);  
    }
    public function Actualizar()
    {
        $consultorio=new Core\Consultorio;
        $consultorio->id_Consultorio=1;
        $consultorio->id_Clinica=2;
        $consultorio->nombre='Bm2';
        $consultorio->descripcion='Terapia intensiva';
        $this->mConsultorio->Actualizar($consultorio);  
    }
    public function Eliminar()
    {
     
        $this->mConsultorio->Eliminar(2);  
    }
}

?>