<?php 
class mPaqueteServicio 
{
    private $db;
    public function __construct() {
        $this->db=new Database();
    }

    public function Insertar($paqueteServicio)
    {
        $query="INSERT INTO PaqueteServicio(id_Paquete, id_Servicio)
                VALUES (:id_Paquete, :id_Servicio)";
        $this->db->query($query);
        $this->db->bParam(':id_Paquete',$paqueteServicio->id_Paquete);
        $this->db->bParam(':id_Servicio',$paqueteServicio->id_Servicio);
        return $this->db->execute();
    }
    public function Actualizar($paqueteServicio)
    {
        $query="UPDATE PaqueteServicio 
                SET id_Paquete=:id_Paquete, id_Servicio=:id_Servicio
                WHERE id_PaqueteServicio=:id_PaqueteServicio";
        $this->db->query($query);
        $this->db->bParam(':id_Paquete',$paqueteServicio->id_Paquete);
        $this->db->bParam(':id_Servicio',$paqueteServicio->paqueteServicio);
        $this->db->bParam(':id_PaqueteServicio',$paqueteServicio->paqueteServicio);
        return $this->db->execute();
    }
    public function Eliminar($id)
    {
        $query="DELETE FROM PaqueteServicio 
                WHERE id_PaqueteServicio=:id_PaqueteServicio";
        $this->db->query($query);
        $this->db->bParam(':id_PaqueteServicio',$id);
        return $this->db->execute();
    }
}
?>