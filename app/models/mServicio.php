<?php 
class mServicio
{
    private $db;
    public function __construct() {
        $this->db=new Database();
    }

    public function Insertar($servicio)
    {
        $query="INSERT INTO Servicio(nombre, descripcion, precio)
                VALUES (:nombre, :descripcion, :precio)";
        $this->db->query($query);
        $this->db->bParam(':nombre',$servicio->nombre);
        $this->db->bParam(':descripcion',$servicio->descripcion);
        $this->db->bParam(':precio',$servicio->precio);
        return $this->db->execute();
    }
    public function Actualizar($servicio)
    {
        $query="UPDATE Servicio 
                SET nombre=:nombre, descripcion=:descripcion, precio=:precio
                WHERE id_Servicio=:id_Servicio";
        $this->db->query($query);
        $this->db->bParam(':nombre',$servicio->nombre);
        $this->db->bParam(':descripcion',$servicio->descripcion);
        $this->db->bParam(':precio',$servicio->precio);
        $this->db->bParam(':id_Servicio',$servicio->id_Servicio);
        return $this->db->execute();
    }
    public function Eliminar($id)
    {
        $query="DELETE FROM Servicio 
                WHERE id_Servicio=:id_Servicio";
        $this->db->query($query);
        $this->db->bParam(':id_Servicio',$id);
        return $this->db->execute();
    }
}
?>