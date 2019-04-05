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
        $cita->id_HorarioVetCon=$_POST['Cita']['id_HorarioVetCon'];
        $cita->id_Mascota=$_POST['Cita']['id_Macota'];
        $cita->horario_Cita=$_POST['Cita']['horario_Cita'];
        $cita->paquete=$_POST['Cita']['paquete'];
        $this->mCita->Insertar($cita);  
    }
    public function Actualizar()
    {
        $cita=new Core\Cita;
        $cita->id_Cita=$_POST['Cita']['id_Cita'];
        $cita->id_HorarioVetCon=$_POST['Cita']['id_HorarioVetCon'];
        $cita->id_Mascota=$_POST['Cita']['id_Macota'];
        $cita->horario_Cita=$_POST['Cita']['horario_Cita'];
        $cita->paquete=$_POST['Cita']['paquete'];
        $this->mCita->Actualizar($cita);  
    }
    public function Eliminar()
    {
     
        print_r( $this->mCita->Eliminar(1));  
    }
}

?>
    