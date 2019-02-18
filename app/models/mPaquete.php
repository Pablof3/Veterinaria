<?php 
class mPaquete 
{
    private $db;
    public function __construct() {
        $this->db=new Database();
    }
    public function Insertar($paquete)
    {
        $query="INSERT INTO Paquete(nombre, precio, descripcion)
                VALUES (:nombre, :precio, :descripcion)";
        $this->db->query($query);
        $this->db->bParam(':nombre',$paquete->nombre);
        $this->db->bParam(':precio',$paquete->precio);
        $this->db->bParam(':descripcion',$paquete->descripcion);
        return $this->db->execute();
    }
    public function Actualizar($paquete)
    {
        $query="UPDATE Paquete 
                SET nombre=:nombre, precio=:precio, descripcion=:descripcion
                WHERE id_Paquete=:id_Paquete";
        $this->db->query($query);
        $this->db->bParam(':nombre',$paquete->nombre);
        $this->db->bParam(':precio',$paquete->precio);
        $this->db->bParam(':descripcion',$paquete->descripcion);
        $this->db->bParam(':id_Paquete',$paquete->id_Paquete);
        return $this->db->execute();
    }
    public function Eliminar($id)
    {
        $query="DELETE FROM Paquete 
                WHERE id_Paquete=:id_Paquete";
        $this->db->query($query);
        $this->db->bParam(':id_Paquete',$id);
        return $this->db->execute();
    }
}
?>