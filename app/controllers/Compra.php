<?php
class Compra extends Controller
{
    private $mCompra;
    public function __construct() 
    {
       $this->mCompra=$this->modelo('mCompra');
    }
    public function Registrar()
    {
        $compra=new Core\Compra;
        $compra->id_Proveedor=$_POST['Compra']['id_Proveedor'];
        $compra->id_Usuario=$_POST['Compra']['id_Usuario'];
        $compra->total=$_POST['Compra']['total'];
        $this->mCompra->Insertar($compra);  
    }
    public function Actualizar()
    {
        $compra=new Core\Compra;
        $compra->id_Compra=$_POST['Compra']['id_Compra'];
        $compra->id_Proveedor=$_POST['Compra']['id_Proveedor'];
        $compra->id_Usuario= $_POST['Compra']['id_Usuario'];
        $compra->total=$_POST['Compra']['total'];
        $this->mCompra->Actualizar($compra);   
    }
    public function Eliminar()
    {
     
        $this->mCompra->Eliminar();  
    }
}

?>