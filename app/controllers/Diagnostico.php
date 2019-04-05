<?php
class Diagnostico extends Controller
{
    private $mDiagnostico;
    public function __construct() 
    {
       $this->mDiagnostico=$this->modelo('mDiagnostico');
    }
    public function Registrar()
    {
        $diagnostico=new Core\Diagnostico;
        $diagnostico->id_Cita=$_POST['Diagnostico']['id_Cita'];
        $diagnostico->diagnostico=$_POST['Diagnostico']['diagnostico'];
        $diagnostico->codigo=$_POST['Diagnostico']['codigo'];
        $diagnostico->precio_Total=$_POST['Diagnostico']['precio_Total'];
        $diagnostico->saldo=$_POST['Diagnostico']['saldo'];
        $this->mDiagnostico->Insertar($diagnostico);  
    }
    public function Actualizar()
    {
        $diagnostico=new Core\Diagnostico;
        $diagnostico->id_Diagnostico=$_POST['Diagnostico']['id_Diagnostico'];
        $diagnostico->id_Cita=$_POST['Diagnostico']['id_Cita'];
        $diagnostico->diagnostico=$_POST['Diagnostico']['diagnostico'];
        $diagnostico->codigo=$_POST['Diagnostico']['codigo'];
        $diagnostico->precio_Total=$_POST['Diagnostico']['precio_Total'];
        $diagnostico->saldo=$_POST['Diagnostico']['saldo'];
        $this->mDiagnostico->Actualizar($diagnostico);  
    }
    public function Eliminar()
    {
     
        $this->mDiagnostico->Eliminar();  
    }

    public function vRegistrar()
    {
        $this->vista('Diagnostico/vRegistrar');
    }
}

?>