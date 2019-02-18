<?php
class mNotificacion
{
    private $db;
    public function __construct() {
        $this->db=new Database();
    }
    public function Insertar($notificacion)
    {
        $query="INSERT INTO Notificacion(id_Cliente, mensaje, fechaEnvio)
                VALUES (:id_Cliente, :mensaje, :fechaEnvio)";
        $this->db->query($query);
        $this->db->bParam(':id_Cliente',$notificacion->id_Cliente);
        $this->db->bParam(':mensaje',$notificacion->mensaje);
        $this->db->bParam(':fechaEnvio',$notificacion->fechaEnvio);
        return $this->db->execute();
    }
    public function Actualizar($notificacion)
    {
        $query="UPDATE Notificacion 
                SET id_Cliente=:id_Cliente, mensaje=:mensaje, fechaEnvio=:fechaEnvio
                WHERE id_Notificacion=:id_Notificacion";
        $this->db->query($query);
        $this->db->bParam(':id_Cliente',$notificacion->id_Cliente);
        $this->db->bParam(':mensaje',$notificacion->mensaje);
        $this->db->bParam(':fechaEnvio',$notificacion->fechaEnvio);
        $this->db->bParam(':id_Notificacion',$notificacion->id_Notificacion);
        return $this->db->execute();
    }
    public function Eliminar($id)
    {
        $query="DELETE FROM Notificacion 
                WHERE id_Notificacion=:id_Notificacion";
        $this->db->query($query);
        $this->db->bParam(':id_Notificacion',$id);
        return $this->db->execute();
    }
}

?>