<?php 
class mRegistroPagoDiagnostico
{
    private $db;
    public function __construct() {
        $this->db=new Database();
    }

    public function Insertar($registroPagoDiagnostico)
    {
        $query="INSERT INTO RegistroPagoDiagnostico(id_Diagnostico, pago, codigo_Diagnostico)
                VALUES (:id_Diagnostico, :pago, :codigo_Diagnostico)";
        $this->db->query($query);
        $this->db->bParam(':id_Diagnostico',$registroPagoDiagnostico->id_Diagnostico);
        $this->db->bParam(':pago',$registroPagoDiagnostico->pago);
        $this->db->bParam(':codigo_Diagnostico',$registroPagoDiagnostico->codigo_Diagnostico);
        return $this->db->execute();
    }
    public function Actualizar($registroPagoDiagnostico)
    {
        $query="UPDATE RegistroPagoDiagnostico 
                SET id_Diagnostico=:id_Diagnostico, pago=:pago, codigo_Diagnostico=:codigo_Diagnostico
                WHERE id_PagoDiagnostico=:id_PagoDiagnostico";
        $this->db->query($query);
        $this->db->bParam(':id_Diagnostico',$registroPagoDiagnostico->id_Diagnostico);
        $this->db->bParam(':pago',$registroPagoDiagnostico->pago);
        $this->db->bParam(':codigo_Diagnostico',$registroPagoDiagnostico->codigo_Diagnostico);
        $this->db->bParam(':id_PagoDiagnostico',$registroPagoDiagnostico->id_PagoDiagnostico);
        return $this->db->execute();
    }
    public function Eliminar($id)
    {
        $query="DELETE FROM RegistroPagoDiagnostico 
                WHERE id_PagoDiagnostico=:id_PagoDiagnostico";
        $this->db->query($query);
        $this->db->bParam(':id_PagoDiagnostico',$id);
        return $this->db->execute();
    }
}
?>