<?php 
class Producto extends Controller 
{
    private $mProducto;
    public function __construct() 
    {
        $this->mProducto=$this->modelo('mProducto');
    }
    public function Registrar()
    {
        $producto=new Core\Producto;
        $producto->id_Producto=$_POST['Producto']['id_Producto'];
        $producto->id_Categoria=$_POST['Producto']['id_Categoria'];
        $producto->id_Subcategoria=$_POST['Producto']['id_Subcategoria'];
        $producto->nombre=$_POST['Producto']['nombre'];
        $producto->descripcion=$_POST['Producto']['id_Producto'];
        $producto->cantMinInv=$_POST['Producto']['cantMinInv'];
        $producto->stock=$_POST['Producto']['stock'];
        $producto->codigo_Lote=$_POST['Producto']['codigo_Lote'];
        $producto->precio_Compra=$_POST['Producto']['precio_Compra'];
        $producto->precio_Venta=$_POST['Producto']['precio_Venta'];
        $this->mProducto->Insertar($producto);
    }

    public function Actualizar()
    {
        $producto=new Core\Producto;
        $producto->id_Producto=$_POST['Producto']['id_Producto'];
        $producto->id_Categoria=$_POST['Producto']['id_Categoria'];
        $producto->id_Subcategoria=$_POST['Producto']['id_Subcategoria'];
        $producto->nombre=$_POST['Producto']['nombre'];
        $producto->descripcion=$_POST['Producto']['descripcion'];
        $producto->cantMinInv=$_POST['Producto']['cantMinInv'];
        $producto->stock=$_POST['Producto']['stock'];
        $producto->codigo_Lote=$_POST['Producto']['codigo_Lote'];
        $producto->precio_Compra=$_POST['Producto']['precio_Compra'];
        $producto->precio_Venta=$_POST['Producto']['id_Venta'];
        $this->mProducto->Actualizar($producto);
    }

    public function Eliminar()
    {
        $this->mProducto->Eliminar(2);
    }
}

?>