<?php 
require "../app/core/NamespaceCore.php";
class Venta extends Controller 
{
    private $mVenta;
    public function __construct() {
        $this->mVenta=$this->modelo('mVenta');
    }

    public function Registrar()
    {
        $venta=new Core\Venta;
        $venta->id_Venta=1;
        $venta->id_Cliente=1;
        $venta->id_Usuario=1;
        $venta->total=500.00;
        $this->mVenta->Insertar($venta);
    }

    public function Actualizar()
    {
        $venta=new Core\Venta;
        $venta->id_Venta=1;
        $venta->id_Cliente=1;
        $venta->id_Usuario=1;
        $venta->total=1000.00;
        $this->mVenta->Actualizar($venta);
    }

    public function Eliminar()
    {
        $this->mVenta->Eliminar(1);
    }
}

?>