<?php
class mDiagnostico
{
    private $db;
    public function __construct() {
        $this->db = new Database();
    }

    public function Insertar($Diagnostico)
    {
        $query="INSERT INTO Diagnostico (id_Cita, diagnostico, codigo, precio_Total, saldo) 
                VALUES (:id_Cita, :diagnostico, :codigo, :precio_Total, :saldo)";
        $this->db->query($query);
        $this->db->bParam(':id_Cita' , $Diagnostico->id_Cita);
        $this->db->bParam(':diagnostico', $Diagnostico->diagnostico);
        $this->db->bParam(':codigo', $Diagnostico->codigo);
        $this->db->bParam(':precio_Total', $Diagnostico->precio_Total);
        $this->db->bParam(':saldo', $Diagnostico->saldo);
        return $this->db->execute();
    }

    public function Actualizar($Diagnostico)
    {
        $query="UPDATE Diagnostico
                SET id_Cita=:id_Cita, diagnostico=:diagnostico, codigo=:codigo precio_Total=:precio_Total, saldo=:saldo
                WHERE id_Diagnostico=:id_Diagnostico";
        $this->db->query($query);
        $this->db->bParam(':id_Cita' , $Diagnostico->id_Cita);
        $this->db->bParam(':diagnostico', $Diagnostico->diagnostico);
        $this->db->bParam(':codigo', $Diagnostico->codigo);
        $this->db->bParam(':precio_Total', $Diagnostico->precio_Total);
        $this->db->bParam(':saldo', $Diagnostico->saldo);
        $this->db->bParam(':id_Diagnostico', $Diagnostico->id_Diagnostico);
        return $this->db->execute();
    }

    public function Eliminar($id)
    {
        $query="DELETE FROM Diagnostico
                WHERE id_Diagnostico=:id_Diagnostico";
        $this->db->query($query);
        $this->db->bParam(':id_Diagnostico',$id);
        return $this->db->execute();
    } 
}
