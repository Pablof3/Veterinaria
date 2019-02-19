<?php
class mDireccion
{
    private $db;
    public function __construct() {
        $this->db = new Database();
    }

    public function Insertar($Direccion)
    {
        $query="INSERT INTO Direccion (id_Cita, Direccion, codigo, precio_Total, saldo) 
                VALUES (:id_Cita, :Direccion, :codigo, :precio_Total, :saldo)";
        $this->db->query($query);
        $this->db->bParam(':id_Cita' , $Direccion->id_Cita);
        $this->db->bParam(':Direccion', $Direccion->Direccion);
        $this->db->bParam(':codigo', $Direccion->codigo);
        $this->db->bParam(':precio_Total', $Direccion->precio_Total);
        $this->db->bParam(':saldo', $Direccion->saldo);
        return $this->db->execute();
    }

    public function Actualizar($Direccion)
    {
        $query="UPDATE Direccion
                SET id_Cita=:id_Cita, Direccion=:Direccion, codigo=:codigo precio_Total=:precio_Total, saldo=:saldo
                WHERE id_Direccion=:id_Direccion";
        $this->db->query($query);
        $this->db->bParam(':id_Cita' , $Direccion->id_Cita);
        $this->db->bParam(':Direccion', $Direccion->Direccion);
        $this->db->bParam(':codigo', $Direccion->codigo);
        $this->db->bParam(':precio_Total', $Direccion->precio_Total);
        $this->db->bParam(':saldo', $Direccion->saldo);
        $this->db->bParam(':id_Direccion', $Direccion->id_Direccion);
        return $this->db->execute();
    }

    public function Eliminar($id)
    {
        $query="DELETE FROM Direccion
                WHERE id_Direccion=:id_Direccion";
        $this->db->bParam($query);
        $this->db->bParam(':id_Direccion',$id);
        return $this->db->execute();
    } 
}
