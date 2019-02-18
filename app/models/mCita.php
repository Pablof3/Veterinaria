<?php
class mCita
{
    private $db;
    public function __construct() {
        $this->db = new Database();
    }

    public function Insertar($Cita)
    {
        $query="INSERT INTO Cita (horario_Cita, paquete) 
                VALUES (:horario_Cita, :paquete)";
        $this->db->query($query);
        $this->db->bParam(':horario_Cita , :paquete' , $Cita->horario_Cita , $Cita->paquete);
        return $this->db->execute();
    }
}
