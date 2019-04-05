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
        $detalleventa->id_Venta=$_POST['DetalleVenta']['id_Venta'];
        $detalleventa->id_Producto=$_POST['DetalleVenta']['id_Producto'];
        $detalleventa->precio_Venta=$_POST['DetalleVenta']['precio_Venta'];
        $detalleventa->cantidad=$_POST['DetalleVenta']['cantidad'];
        $detalleventa->subtotal=$_POST['DetalleVenta']['subtotal'];
        $this->mDetalleVenta->Insertar($detalleventa);  
    }
    public function Actualizar()
    {
        $detalleventa=new Core\DetalleVenta;
        $detalleventa->id_DetalleVenta=$_POST['DetalleVenta']['id_DetalleVenta'];
        $detalleventa->id_Venta=$_POST['DetalleVenta']['id_Venta'];
        $detalleventa->id_Producto=$_POST['DetalleVenta']['id_Producto'];
        $detalleventa->precio_Venta=$_POST['DetalleVenta']['precio_Venta'];
        $detalleventa->cantidad=$_POST['DetalleVenta']['cantidad'];
        $detalleventa->subtotal=$_POST['DetalleVenta']['subtotal'];
        $this->mDetalleVenta->Actualizar($detalleventa);   
    }
    public function Eliminar()
    {
     
        $this->mDetalleVenta->Eliminar();  
    }
}

?>