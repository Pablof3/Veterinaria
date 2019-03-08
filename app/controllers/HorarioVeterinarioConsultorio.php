<?php
require "../app/core/NamespaceCore.php";
class HorarioVeterinarioConsultorio extends Controller
{
    private $mHorarioVeterinarioConsultorio;
    public function __construct() 
    {
       $this->mHorarioVeterinarioConsultorio=$this->modelo('mHorarioVeterinarioConsultorio');
    }
    public function Registrar()
    {
        $horarioveterinarioconsultorio=new Core\HorarioVeterinarioConsultorio;
        $horarioveterinarioconsultorio->id_Consultorio=1;
        $horarioveterinarioconsultorio->id_Veterinario= 1;
        //$horarioveterinarioconsultorio->horario_Inicio=date('H:i:s', time());
        $horarioveterinarioconsultorio->horario_Inicio='09:00:00';
        $horarioveterinarioconsultorio->horario_Fin='18:00:00';
        $this->mHorarioVeterinarioConsultorio->Insertar($horarioveterinarioconsultorio);  
    }
    public function Actualizar()
    {
        $horarioveterinarioconsultorio=new Core\HorarioVeterinarioConsultorio;
        $horarioveterinarioconsultorio->id_HorarioVetCon=1;
        $horarioveterinarioconsultorio->id_Consultorio=1;
        $horarioveterinarioconsultorio->id_Veterinario= 1;
        //$horarioveterinarioconsultorio->horario_Inicio=date('H:i:s', time());
        $horarioveterinarioconsultorio->horario_Inicio='10:00:00';
        $horarioveterinarioconsultorio->horario_Fin='18:00:00';
        $this->mHorarioVeterinarioConsultorio->Actualizar($horarioveterinarioconsultorio);   
    }
    public function Eliminar()
    {
     
        $this->mHorarioVeterinarioConsultorio->Eliminar(1);  
    }
}

?>