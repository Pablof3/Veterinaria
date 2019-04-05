<?php
class DetalleCompra extends Controller
{
    private $mDetalleCompra;
    public function __construct() 
    {
       $this->mDetalleCompra=$this->modelo('mDetalleCompra');
    }
    public function Registrar()
    {
        $detallecompra=new Core\DetalleCompra;
        $detallecompra->id_Compra=$_POST['DetalleCompra']['id_Compra'];
        $detallecompra->id_Producto=$_POST['DetalleCompra']['id_Producto'];
        $detallecompra->precio_Compra=$_POST['DetalleCompra']['precio_Compra'];
        $detallecompra->cantidad=$_POST['DetalleCompra']['cantidad'];
        $detallecompra->subtotal=$_POST['DetalleCompra']['subtotal'];
        $this->mDetalleCompra->Insertar($detallecompra);  
    }
    public function Actualizar()
    {
        $detallecompra=new Core\DetalleCompra;
        $detallecompra->id_DetalleCompra=$_POST['DetalleCompra']['id_DetalleCompra'];
        $detallecompra->id_Compra=$_POST['DetalleCompra']['id_Compra'];
        $detallecompra->id_Producto=$_POST['DetalleCompra']['id_Producto'];
        $detallecompra->precio_Compra=$_POST['DetalleCompra']['precio_Compra'];
        $detallecompra->cantidad=$_POST['DetalleCOmpra']['cantidad'];
        $detallecompra->subtotal=$_POST['DetalleCompra']['subtotal'];
        $this->mDetalleCompra->Actualizar($detallecompra);   
    }
    public function Eliminar()
    {
     
        $this->mDetalleCompra->Eliminar();  
    }
}

?>