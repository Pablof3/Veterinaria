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
        $producto->id_Producto=1;
        $producto->id_Categoria=1;
        $producto->id_Subcategoria=1;
        $producto->nombre='Comida para Perro';
        $producto->descripcion='Comida para Perro Pequeño';
        $producto->cantMinInv=5;
        $producto->stock=0;
        $producto->codigo_Lote='Pr123';
        $producto->precio_Compra=30.5;
        $producto->precio_Venta=40;
        $this->mProducto->Insertar($producto);
    }

    public function Actualizar()
    {
        $producto=new Core\Producto;
        $producto->id_Producto=1;
        $producto->id_Categoria=1;
        $producto->id_Subcategoria=1;
        $producto->nombre='Comida para Perro';
        $producto->descripcion='Comida para Perro Grande';
        $producto->cantMinInv=5;
        $producto->stock=0;
        $producto->codigo_Lote='Pr123';
        $producto->precio_Compra=30.5;
        $producto->precio_Venta=40;
        $this->mProducto->Actualizar($producto);
    }

    public function Eliminar()
    {
        $this->mProducto->Eliminar(2);
    }
}

?>