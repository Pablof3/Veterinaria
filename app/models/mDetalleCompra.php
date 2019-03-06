<?php
class mDetalleCompra
{
    private $db;
    public function __construct() {
        $this->db = new Database();
    }

    public function Insertar($DetalleCompra)
    {
        $query="INSERT INTO DetalleCompra (id_Compra, id_Producto, precio_Compra, cantidad, subtotal) 
                VALUES (:id_Compra, :id_Producto, :precio_Compra, :cantidad, :subtotal)";
        $this->db->query($query);
        $this->db->bParam(':id_Compra' , $DetalleCompra->id_Compra);
        $this->db->bParam(':id_Producto', $DetalleCompra->id_Producto);
        $this->db->bParam(':precio_Compra', $DetalleCompra->precio_Compra);
        $this->db->bParam(':cantidad', $DetalleCompra->cantidad);
        $this->db->bParam(':subtotal', $DetalleCompra->subtotal);
        return $this->db->execute();
    }

    public function Actualizar($DetalleCompra)
    {
        $query="UPDATE DetalleCompra
                SET id_Compra=:id_Compra, id_Producto=:id_Producto, precio_Compra=:precio_Compra, cantidad=:cantidad, subtotal=:subtotal
                WHERE id_DetalleCompra=:id_DetalleCompra";
        $this->db->query($query);
        $this->db->bParam(':id_Compra' , $DetalleCompra->id_Compra);
        $this->db->bParam(':id_Producto', $DetalleCompra->id_Producto);
        $this->db->bParam(':precio_Compra', $DetalleCompra->precio_Compra);
        $this->db->bParam(':cantidad', $DetalleCompra->cantidad);
        $this->db->bParam(':subtotal', $DetalleCompra->subtotal);
        $this->db->bParam(':id_DetalleCompra', $DetalleCompra->id_DetalleCompra);
        return $this->db->execute();
    }

    public function Eliminar($id)
    {
        $query="DELETE FROM DetalleCompra
                WHERE id_DetalleCompra=:id_DetalleCompra";
        $this->db->query($query);
        $this->db->bParam(':id_DetalleCompra',$id);
        return $this->db->execute();
    } 
}
