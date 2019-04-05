<?php
class RegistroPagoDiagnostico extends Controller
{
    private $mRegistroPagoDiagnostico;
    
    public function __construct() {
        $this->mRegistroPagoDiagnostico=$this->modelo('mRegistroPagoDiagnostico');
    }

    public function Registrar()
    {
        $registroPagoDiagnostico=new Core\RegistroPagoDiagnostico;
        $registroPagoDiagnostico->id_PagoDiagnostico=$_POST['RegistroPagoDiagnostico']['id_PagoDiagnostico'];
        $registroPagoDiagnostico->id_Diagnostico=$_POST['RegistroPagoDiagnostico']['id_Diagnostico'];
        $registroPagoDiagnostico->pago=$_POST['RegistroPagoDiagnostico']['Pago'];
        $registroPagoDiagnostico->codigo_Diagnostico=$_POST['RegistroPagoDiagnostico']['codigo_Diagnostico'];

        $this->mRegistroPagoDiagnostico->Insertar($registroPagoDiagnostico);
    }

    public function Actualizar()
    {
        $registroPagoDiagnostico=new Core\RegistroPagoDiagnostico;
        $registroPagoDiagnostico->id_PagoDiagnostico=$_POST['RegistroPagoDiagnostico']['id_PagoDiagnostico'];
        $registroPagoDiagnostico->id_Diagnostico=$_POST['RegistroPagoDiagnostico']['id_Diagnostico'];
        $registroPagoDiagnostico->pago=$_POST['RegistroPagoDiagnostico']['Pago'];
        $registroPagoDiagnostico->codigo_Diagnostico=$_POST['RegistroPagoDiagnostico']['codigo_Diagnostico'];

        $this->mRegistroPagoDiagnostico->Actualizar($registroPagoDiagnostico);
    }

    public function Eliminar()
    {
        $this->mRegistroPagoDiagnostico->Eliminar(1);
    }
}

?>