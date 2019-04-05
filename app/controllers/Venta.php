<?php 
class Venta extends Controller 
{
    private $mVenta;
    public function __construct() {
        $this->mVenta=$this->modelo('mVenta');
    }

    public function Registrar()
    {
        $venta=new Core\Venta;
        $venta->id_Venta=$_POST['Venta']['id_Venta'];
        $venta->id_Cliente=$_POST['Venta']['id_Cliente'];
        $venta->id_Usuario=$_POST['Venta']['id_Usuario'];
        $venta->total=$_POST['Venta']['Total'];
        $this->mVenta->Insertar($venta);
    }

    public function Actualizar()
    {
        $venta=new Core\Venta;
        $venta->id_Venta=$_POST['Venta']['id_Venta'];
        $venta->id_Cliente=$_POST['Venta']['id_Cliente'];
        $venta->id_Usuario=$_POST['Venta']['id_Usuario'];
        $venta->total=$_POST['Venta']['total'];
        $this->mVenta->Actualizar($venta);
    }

    public function Eliminar()
    {
        $this->mVenta->Eliminar(1);
    }
}

?>