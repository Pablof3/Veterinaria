<?php
class mCita
{
    private $db;
    public function __construct() {
        $this->db = new Database();
    }

    public function Insertar($Cita)
    {
        $query="INSERT INTO Cita (id_HorarioVetCon, id_Mascota, horario_Cita, paquete) 
                VALUES (:id_HorarioVetCon, :id_Mascota, :horario_Cita, :paquete)";
        $this->db->query($query);
        $this->db->bParam(':id_HorarioVetCon' ,$Cita->id_HorarioVetCon);
        $this->db->bParam(':id_Mascota',$Cita->id_Mascota);
        $this->db->bParam(':horario_Cita' ,$Cita->horario_Cita);
        $this->db->bParam(':paquete' ,$Cita->paquete);
        return $this->db->execute();
    }

    public function Actualizar($Cita)
    {
        $query="UPDATE Cita 
                SET id_HorarioVetCon=:id_HorarioVetCon, id_Mascota=:id_Mascota, horario_Cita=:horario_Cita, paquete=:paquete
                WHERE id_Cita=:id_Cita";
        $this->db->query($query);
        $this->db->bParam(':id_HorarioVetCon' ,$Cita->id_HorarioVetCon);
        $this->db->bParam(':id_Mascota',$Cita->id_Mascota);
        $this->db->bParam(':horario_Cita' ,$Cita->horario_Cita);
        $this->db->bParam(':paquete' ,$Cita->paquete);
        $this->db->bParam(':id_Cita',$Cita->id_Cita);
        return $this->db->execute();
    }

    public function Eliminar($id)
    {
        $query="DELETE FROM Cita
                WHERE id_Cita=:id_Cita";
        $this->db->query($query);
        $this->db->bParam(':id_Cita',$id);
        return $this->db->execute();
    }
}
