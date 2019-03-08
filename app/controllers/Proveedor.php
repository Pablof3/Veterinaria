<?php 
require "../app/core/NamespaceCore.php";
class Proveedor extends Controller 
{
    private $mProveedor;
    public function __construct() {
        $this->mProveedor=$this->modelo('mProveedor');
    }

    public function Registrar()
    {
        $proveedor=new Core\Proveedor;
        $proveedor->id_Proveedor=1;
        $proveedor->empresa='Wiskas';
        $proveedor->ci='98764523';
        $proveedor->nit=null;
        $proveedor->encargado='César Gamez Salada';

        $this->mProveedor->Insertar($proveedor);
    }

    public function Actualizar()
    {
        $proveedor=new Core\Proveedor;
        $proveedor->id_Proveedor=1;
        $proveedor->empresa='Pedigree';
        $proveedor->ci='98563523';
        $proveedor->nit=null;
        $proveedor->encargado='César Gamez';

        $this->mProveedor->Actualizar($proveedor);
    }

    public function Eliminar()
    {
        $this->mProveedor->Eliminar(1);
    }
}

?>