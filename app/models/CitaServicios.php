<?php
class CitaServicio
{
    private $db;
    public function __construct() {
        $this->db = new Database();
    }

    public function Insertar($CitaServicios)
    {
        $query="INSERT INTO CitaServicios (id_Cita, id_Servicios) 
                VALUES (:id_Cita, :id_Servicios)";
        $this->db->query($query);
        $this->db->bParam(':id_Cita' , $CitaServicios->id_Cita);
        $this->db->bParam(':id_Servicios', $CitaServicios->id_Servicios);
        return $this->db->execute();
    }

    public function Actualizar($CitaServicios)
    {
        $query="UPDATE CitaServicios
                SET id_Cita=:id_Cita, id_Servicios=:id_Servicios
                WHERE id_CitaServicios=:id_CitaServicios";
        $this->db->query($query);
        $this->db->bParam(':id_Cita' , $CitaServicios->id_Cita);
        $this->db->bParam(':id_Servicios', $CitaServicios->id_Servicios);
        $this->db->bParam(':id_CitaServicios', $CitaServicios->id_CitaServicios);
        return $this->db->execute();
    }

    public function Eliminar($id)
    {
        $query="DELETE FROM CitaServicios
                WHERE id_CitaServicios=:id_CitaServicios";
        $this->db->bParam($query);
        $this->db->bParam(':id_CitaServicios',$id);
        return $this->db->execute();
    }
}