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
        $diagnostico->id_Cita=1;
        $diagnostico->diagnostico='Perro accidentado';
        $diagnostico->codigo='p-02';
        $diagnostico->precio_Total=200;
        $diagnostico->saldo=100;
        $this->mDiagnostico->Insertar($diagnostico);  
    }
    public function Actualizar()
    {
        $diagnostico=new Core\Diagnostico;
        $diagnostico->id_Diagnostico=2;
        $diagnostico->id_Cita=1;
        $diagnostico->diagnostico='Perro con tripa seca caida';
        $diagnostico->codigo='p-02';
        $diagnostico->precio_Total=200;
        $diagnostico->saldo=100;
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