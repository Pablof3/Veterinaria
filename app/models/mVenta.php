<?php
class mVenta
{
    private $db;
    public function __construct() {
        $this->db=new Database();
    }
    public function Insertar($venta)
    {
        $query="INSERT INTO Venta(id_Cliente, id_Usuario, total)
                VALUES (:id_Cliente, :id_Usuario, :total)";
        $this->db->query($query);
        $this->db->bParam(':id_Cliente',$venta->id_Cliente);
        $this->db->bParam(':id_Usuario',$venta->id_Usuario);
        $this->db->bParam(':total',$venta->total);
        return $this->db->execute();
    }
    public function Actualizar($venta)
    {
        $query="UPDATE Venta 
                SET id_Cliente=:id_Cliente, id_Usuario=:id_Usuario, total=:total
                WHERE id_Venta=:id_Venta";
        $this->db->query($query);
        $this->db->bParam(':id_Cliente',$venta->id_Cliente);
        $this->db->bParam(':id_Usuario',$venta->id_Usuario);
        $this->db->bParam(':total',$venta->total);
        $this->db->bParam(':id_Venta',$venta->id_Venta);
        return $this->db->execute();
    }
    public function Eliminar($id)
    {
        $query="DELETE FROM Venta 
                WHERE id_Venta=:id_Venta";
        $this->db->query($query);
        $this->db->bParam(':id_Venta',$id);
        return $this->db->execute();
    }
}

?>