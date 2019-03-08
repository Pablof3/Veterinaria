<?php
require "../app/core/NamespaceCore.php";
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
        $compra->id_Proveedor=1;
        $compra->id_Usuario= 1;
        $compra->total=4562;
        $this->mCompra->Insertar($compra);  
    }
    public function Actualizar()
    {
        $compra=new Core\Compra;
        $compra->id_Compra=1;
        $compra->id_Proveedor=1;
        $compra->id_Usuario= 1;
        $compra->total=123.15;
        $this->mCompra->Actualizar($compra);   
    }
    public function Eliminar()
    {
     
        $this->mCompra->Eliminar();  
    }
}

?>