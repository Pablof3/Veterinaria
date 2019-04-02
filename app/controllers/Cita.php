<?php
class Cita extends Controller
{
    private $mCita;
    public function __construct() {
        $this->mCita=$this->modelo('mCita');
    }
    public function Registrar()
    {
        $cita=new Core\Cita;
        $cita->id_HorarioVetCon=2;
        $cita->id_Mascota=2;
        $cita->horario_Cita=2;
        $cita->paquete=2;
        $this->mCita->Insertar($cita);  
    }
    public function Actualizar()
    {
        $cita=new Core\Cita;
        $cita->id_Cita=1;
        $cita->id_HorarioVetCon=3;
        $cita->id_Mascota=2;
        $cita->horario_Cita=3;
        $cita->paquete=2;
        $this->mCita->Actualizar($cita);  
    }
    public function Eliminar()
    {
     
        print_r( $this->mCita->Eliminar(1));  
    }
}

?>
    