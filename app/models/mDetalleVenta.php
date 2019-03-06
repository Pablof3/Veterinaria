<?php
class mDetalleVenta
{
    private $db;
    public function __construct() {
        $this->db = new Database();
    }

    public function Insertar($DetalleVenta)
    {
        $query="INSERT INTO DetalleVenta (id_Venta, id_Producto, precio_Venta, cantidad, subtotal) 
                VALUES (:id_Venta, :id_Producto, :precio_Venta, :cantidad, :subtotal)";
        $this->db->query($query);
        $this->db->bParam(':id_Venta' , $DetalleVenta->id_Venta);
        $this->db->bParam(':id_Producto', $DetalleVenta->id_Producto);
        $this->db->bParam(':precio_Venta', $DetalleVenta->precio_Venta);
        $this->db->bParam(':cantidad', $DetalleVenta->cantidad);
        $this->db->bParam(':subtotal', $DetalleVenta->subtotal);
        return $this->db->execute();
    }

    public function Actualizar($DetalleVenta)
    {
        $query="UPDATE DetalleVenta
                SET id_Venta=:id_Venta, id_Producto=:id_Producto, precio_Venta=:precio_Venta cantidad=:cantidad, subtotal=:subtotal
                WHERE id_DetalleVenta=:id_DetalleVenta";
        $this->db->query($query);
        $this->db->bParam(':id_Venta' , $DetalleVenta->id_Venta);
        $this->db->bParam(':id_Producto', $DetalleVenta->id_Producto);
        $this->db->bParam(':precio_Venta', $DetalleVenta->precio_Venta);
        $this->db->bParam(':cantidad', $DetalleVenta->cantidad);
        $this->db->bParam(':subtotal', $DetalleVenta->subtotal);
        $this->db->bParam(':id_DetalleVenta', $DetalleVenta->id_DetalleVenta);
        return $this->db->execute();
    }

    public function Eliminar($id)
    {
        $query="DELETE FROM DetalleVenta
                WHERE id_DetalleVenta=:id_DetalleVenta";
        $this->db->query($query);
        $this->db->bParam(':id_DetalleVenta',$id);
        return $this->db->execute();
    } 
}
