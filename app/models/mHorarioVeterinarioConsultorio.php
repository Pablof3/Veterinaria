<?php
class mHorarioVeterinarioConsultorio
{
    private $db;
    public function __construct() {
        $this->db = new Database();
    }

    public function Insertar($HorarioVeterinarioConsultorio)
    {
        $query="INSERT INTO HorarioVeterinarioConsultorio (id_Consultorio, id_Veterinario, horario_Inicio, horario_Fin ) 
                VALUES (:id_Consultorio, :id_Veterinario, :horario_Inicio, :horario_Fin, :)";
        $this->db->query($query);
        $this->db->bParam(':id_Consultorio' , $HorarioVeterinarioConsultorio->id_Consultorio);
        $this->db->bParam(':id_Veterinario', $HorarioVeterinarioConsultorio->id_Veterinario);
        $this->db->bParam(':horario_Inicio', $HorarioVeterinarioConsultorio->horario_Inicio);
        $this->db->bParam(':horario_Fin', $HorarioVeterinarioConsultorio->horario_Fin);
        return $this->db->execute();
    }

    public function Actualizar($HorarioVeterinarioConsultorio)
    {
        $query="UPDATE HorarioVeterinarioConsultorio
                SET id_Consultorio=:id_Consultorio, id_Veterinario=:id_Veterinario, horario_Inicio=:horario_Inicio, horario_Fin=:horario_Fin
                WHERE id_HorarioVeterinarioConsultorio=:id_HorarioVeterinarioConsultorio";
        $this->db->query($query);
        $this->db->bParam(':id_Consultorio' , $HorarioVeterinarioConsultorio->id_Consultorio);
        $this->db->bParam(':id_Veterinario', $HorarioVeterinarioConsultorio->id_Veterinario);
        $this->db->bParam(':horario_Inicio', $HorarioVeterinarioConsultorio->horario_Inicio);
        $this->db->bParam(':horario_Fin', $HorarioVeterinarioConsultorio->horario_Fin);
        $this->db->bParam(':id_HorarioVeterinarioConsultorio', $HorarioVeterinarioConsultorio->id_HorarioVeterinarioConsultorio);
        return $this->db->execute();
    }

    public function Eliminar($id)
    {
        $query="DELETE FROM HorarioVeterinarioConsultorio
                WHERE id_HorarioVeterinarioConsultorio=:id_HorarioVeterinarioConsultorio";
        $this->db->bParam($query);
        $this->db->bParam(':id_HorarioVeterinarioConsultorio',$id);
        return $this->db->execute();
    } 
}
