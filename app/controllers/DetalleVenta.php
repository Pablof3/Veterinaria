<?php
class DetalleVenta extends Controller
{
    private $mDetalleVenta;
    public function __construct() 
    {
       $this->mDetalleVenta=$this->modelo('mDetalleVenta');
    }
    public function Registrar()
    {
        $detalleventa=new Core\DetalleVenta;
        $detalleventa->id_Venta=1;
        $detalleventa->id_Producto= 1;
        $detalleventa->precio_Venta=12345.66;
        $detalleventa->cantidad=2;
        $detalleventa->subtotal=523.45;
        $this->mDetalleVenta->Insertar($detalleventa);  
    }
    public function Actualizar()
    {
        $detalleventa=new Core\DetalleVenta;
        $detalleventa->id_DetalleVenta=1;
        $detalleventa->id_Venta=1;
        $detalleventa->id_Producto= 1;
        $detalleventa->precio_Venta=12.66;
        $detalleventa->cantidad=2;
        $detalleventa->subtotal=523.45;
        $this->mDetalleVenta->Actualizar($detalleventa);   
    }
    public function Eliminar()
    {
     
        $this->mDetalleVenta->Eliminar();  
    }
}

?>