<?php
class mCargo
{
    private $db;
    public function __construct() {
        $this->db=new Database();
    }

    public function Insertar($cargo)
    {
        $query="INSERT INTO Cargo(nombre) VALUES(:nombre)";
        $this->db->query($query);
        $this->db->bParam(':nombre',$cargo->nombre);
        return $this->db->execute();
    }
    public function Actualizar($cargo)
    {
        $query="UPDATE Cargo SET nombre=:nombre WHERE id_Cargo=:idCargo";
        $this->db->query($query);
        $this->db->bParam(':nombre',$cargo->nombre);
        $this->db->bParam(':idCargo',$cargo->id_Cargo);
        return $this->db->execute();
    }
    public function Eliminar($cargo)
    {
        $query="DELETE FROM Cargo WHERE id_Cargo=:idCargo";
        $this->db->query($query);
        $this->db->bParam(':idCargo',$cargo->id_Cargo);
        return $this->db->execute();
    }
}

?>