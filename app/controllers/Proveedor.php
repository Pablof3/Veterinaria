<?php 
class Proveedor extends Controller 
{
    private $mProveedor;
    public function __construct() {
        $this->mProveedor=$this->modelo('mProveedor');
    }

    public function Registrar()
    {
        $proveedor=new Core\Proveedor;
        $proveedor->id_Proveedor=$_POST['Proveedor']['id_Proveedor'];
        $proveedor->empresa=$_POST['Proveedor']['empresa'];
        $proveedor->ci=$_POST['Proveedor']['ci'];
        $proveedor->nit=null;
        $proveedor->encargado=$_POST['Proveedor']['encargado'];

        $this->mProveedor->Insertar($proveedor);
    }

    public function Actualizar()
    {
        $proveedor=new Core\Proveedor;
        $proveedor->id_Proveedor=$_POST['Proveedor']['id_Proveedor'];
        $proveedor->empresa=$_POST['Proveedor']['empresa'];
        $proveedor->ci=$_POST['Proveedor']['ci'];
        $proveedor->nit=null;
        $proveedor->encargado=$_POST['Proveedor']['encargado'];

        $this->mProveedor->Actualizar($proveedor);
    }

    public function Eliminar()
    {
        $this->mProveedor->Eliminar(1);
    }
}

?>