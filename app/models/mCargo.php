<?php
class mCargo
{
    private $db;
    public function __construct() {
        $this->db=new Database();
    }

    public function Insertar($cargo)
    {
        $query="INSERT INTO Cargo(nombre) 
                VALUES(:nombre)";
        $this->db->query($query);
        $this->db->bParam(':nombre',$cargo->nombre);
        return $this->db->execute();
    }
    public function Actualizar($cargo)
    {
        $query="UPDATE Cargo 
                SET nombre=:nombre 
                WHERE id_Cargo=:id_Cargo";
        $this->db->query($query);
        $this->db->bParam(':nombre',$cargo->nombre);
        $this->db->bParam(':id_Cargo',$cargo->id_Cargo);
        return $this->db->execute();
    }
    public function Eliminar($id)
    {
        $query="DELETE FROM Cargo 
                WHERE id_Cargo=:id_Cargo";
        $this->db->query($query);
        $this->db->bParam(':id_Cargo',$id);
        return $this->db->execute();
    }
}

?>