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
        $detallecompra->id_Compra=1;
        $detallecompra->id_Producto= 1;
        $detallecompra->precio_Compra=123.66;
        $detallecompra->cantidad=2;
        $detallecompra->subtotal=52.45;
        $this->mDetalleCompra->Insertar($detallecompra);  
    }
    public function Actualizar()
    {
        $detallecompra=new Core\DetalleCompra;
        $detallecompra->id_DetalleCompra=1;
        $detallecompra->id_Compra=1;
        $detallecompra->id_Producto= 1;
        $detallecompra->precio_Compra=1234.66;
        $detallecompra->cantidad=2;
        $detallecompra->subtotal=52.45;
        $this->mDetalleCompra->Actualizar($detallecompra);   
    }
    public function Eliminar()
    {
     
        $this->mDetalleCompra->Eliminar();  
    }
}

?>