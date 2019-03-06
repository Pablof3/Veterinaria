<?php
class mCompra
{
    private $db;
    public function __construct() {
        $this->db = new Database();
    }

    public function Insertar($Compra)
    {
        $query="INSERT INTO Compra (id_Proveedor, id_Usuario, total) 
                VALUES (:id_Proveedor, :id_Usuario, :total)";
        $this->db->query($query);
        $this->db->bParam(':id_Proveedor' , $Compra->id_Proveedor);
        $this->db->bParam(':id_Usuario', $Compra->id_Usuario);
        $this->db->bParam(':total' , $Compra->total);
        return $this->db->execute();
    }

    public function Actualizar($Compra)
    {
        $query="UPDATE Compra
                SET id_Proveedor=:id_Proveedor, id_Usuario=:id_Usuario, total=:total
                WHERE id_Compra=:id_Compra";
        $this->db->query($query);
        $this->db->bParam(':id_Proveedor' , $Compra->id_Proveedor);
        $this->db->bParam(':id_Usuario', $Compra->id_Usuario);
        $this->db->bParam(':total' , $Compra->total);
        $this->db->bParam(':id_Compra' , $Compra->id_Compra);
        return $this->db->execute();
    }

    public function Eliminar($id)
    {
        $query="DELETE FROM Compra
                WHERE id_Compra=:id_Compra";
        $this->db->query($query);
        $this->db->bParam(':id_Compra',$id);
        return $this->db->execute();
    } 
}
