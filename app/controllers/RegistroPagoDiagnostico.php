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
        $registroPagoDiagnostico->id_PagoDiagnostico=1;
        $registroPagoDiagnostico->id_Diagnostico=1;
        $registroPagoDiagnostico->pago=100.00;
        $registroPagoDiagnostico->codigo_Diagnostico='d001';

        $this->mRegistroPagoDiagnostico->Insertar($registroPagoDiagnostico);
    }

    public function Actualizar()
    {
        $registroPagoDiagnostico=new Core\RegistroPagoDiagnostico;
        $registroPagoDiagnostico->id_PagoDiagnostico=1;
        $registroPagoDiagnostico->id_Diagnostico=1;
        $registroPagoDiagnostico->pago=150.00;
        $registroPagoDiagnostico->codigo_Diagnostico='d002';

        $this->mRegistroPagoDiagnostico->Actualizar($registroPagoDiagnostico);
    }

    public function Eliminar()
    {
        $this->mRegistroPagoDiagnostico->Eliminar(1);
    }
}

?>