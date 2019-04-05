<?php
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
        $horarioveterinarioconsultorio->id_Consultorio=$_POST['HorarioVeterinarioConsultorio']['id_Consultorio'];
        $horarioveterinarioconsultorio->id_Veterinario=$_POST['HorarioVeterinarioConsultorio']['id_Veterinario'];
        //$horarioveterinarioconsultorio->horario_Inicio=date('H:i:s', time());
        $horarioveterinarioconsultorio->horario_Inicio=$_POST['HorarioVeterinarioConsultorio']['horario_Inicio'];
        $horarioveterinarioconsultorio->horario_Fin=$_POST['HorarioVeterinarioConsultorio']['horario_Fin'];
        $this->mHorarioVeterinarioConsultorio->Insertar($horarioveterinarioconsultorio);  
    }
    public function Actualizar()
    {
        $horarioveterinarioconsultorio=new Core\HorarioVeterinarioConsultorio;
        $horarioveterinarioconsultorio->id_HorarioVetCon=$_POST['HorarioVeterinarioConsultorio']['id_HorarioVetCon'];
        $horarioveterinarioconsultorio->id_Consultorio=$_POST['HorarioVeterinarioConsultorio']['id_Consultorio'];
        $horarioveterinarioconsultorio->id_Veterinario=$_POST['HorarioVeterinarioConsultorio']['id_Veterinario'];
        //$horarioveterinarioconsultorio->horario_Inicio=date('H:i:s', time());
        $horarioveterinarioconsultorio->horario_Inicio=$_POST['HorarioVeterinarioConsultorio']['horario_Inicio'];
        $horarioveterinarioconsultorio->horario_Fin=$_POST['HorarioVeterinarioConsultorio']['horario_Fin'];
        $this->mHorarioVeterinarioConsultorio->Actualizar($horarioveterinarioconsultorio);   
    }
    public function Eliminar()
    {
     
        $this->mHorarioVeterinarioConsultorio->Eliminar();  
    }
}

?>