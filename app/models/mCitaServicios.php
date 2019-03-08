<?php
class mCitaServicios
{
    private $db;
    public function __construct() {
        $this->db = new Database();
    }

    public function Insertar($CitaServicios)
    {
        $query="INSERT INTO CitaServicios (id_Cita, id_Servicio) 
                VALUES (:id_Cita, :id_Servicios)";
        $this->db->query($query);
        $this->db->bParam(':id_Cita' , $CitaServicios->id_Cita);
        $this->db->bParam(':id_Servicios', $CitaServicios->id_Servicio);
        return $this->db->execute();
    }

    public function Actualizar($CitaServicios)
    {
        $query="UPDATE CitaServicios
                SET id_Cita=:id_Cita, id_Servicio=:id_Servicios
                WHERE id_CitaServicios=:id_CitaServicios";
        $this->db->query($query);
        $this->db->bParam(':id_Cita' , $CitaServicios->id_Cita);
        $this->db->bParam(':id_Servicios', $CitaServicios->id_Servicio);
        $this->db->bParam(':id_CitaServicios', $CitaServicios->id_CitaServicios);
        return $this->db->execute();
    }

    public function Eliminar($id)
    {
        $query="DELETE FROM CitaServicios
                WHERE id_CitaServicios=:id_CitaServicios";
        $this->db->query($query);
        $this->db->bParam(':id_CitaServicios',$id);
        return $this->db->execute();
    }
}