<?php 
class mProducto  
{
    private $db;
    public function __construct() {
        $this->db=new Database();
    }
    public function Insertar($producto)
    {
        $query="INSERT INTO Producto(id_Categoria, id_Subcategoria, nombre, descripcion, cantMinInv, stock, codigo_Lote, precio_Compra, precio_Venta)
                VALUES (:id_Categoria, :id_Subcategoria, :nombre, :descripcion, :cantMinInv, :stock, :codigo_Lote, :precio_Compra, :precio_Venta)";
        $this->db->query($query);
        $this->db->bParam(':id_Categoria',$producto->id_Categoria);
        $this->db->bParam(':id_Subcategoria',$producto->id_Subcategoria);
        $this->db->bParam(':nombre',$producto->nombre);
        $this->db->bParam(':descripcion',$producto->descripcion);
        $this->db->bParam(':cantMinInv',$producto->cantMinInv);
        $this->db->bParam(':stock',$producto->stock);
        $this->db->bParam(':codigo_Lote',$producto->codigo_Lote);
        $this->db->bParam(':precio_Compra',$producto->precio_Compra);
        $this->db->bParam(':precio_Venta',$producto->precio_Venta);
        return $this->db->execute();
    }
    public function Actualizar($producto)
    {
        $query="UPDATE Producto 
                SET id_Categoria=:id_Categoria, id_Subcategoria=:id_Subcategoria, nombre=:nombre, descripcion=:descripcion, cantMinInv=:cantMinInv, stock=:stock, codigo_Lote=:codigo_Lote, precio_Compra=:precio_Compra, precio_Venta=:precio_Venta
                WHERE id_Producto=:id_Producto";
        $this->db->query($query);
        $this->db->bParam(':id_Categoria',$producto->id_Categoria);
        $this->db->bParam(':id_Subcategoria',$producto->id_Subcategoria);
        $this->db->bParam(':nombre',$producto->nombre);
        $this->db->bParam(':descripcion',$producto->descripcion);
        $this->db->bParam(':cantMinInv',$producto->cantMinInv);
        $this->db->bParam(':stock',$producto->stock);
        $this->db->bParam(':codigo_Lote',$producto->codigo_Lote);
        $this->db->bParam(':precio_Compra',$producto->precio_Compra);
        $this->db->bParam(':precio_Venta',$producto->precio_Venta);
        $this->db->bParam(':id_Producto',$producto->id_Producto);
        return $this->db->execute();
    }
    public function Eliminar($id)
    {
        $query="DELETE FROM Producto 
                WHERE id_Producto=:id_Producto";
        $this->db->query($query);
        $this->db->bParam(':id_Producto',$id);
        return $this->db->execute();
    }
}
?>