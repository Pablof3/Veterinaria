<?php
class Clinica
{
    private $db;
    public function __construct() {
        $this->db = new Database();
    }

    public function Insertar($Clinica)
    {
        $query="INSERT INTO Clinica (nombre_Clinica, descripcion, direccion) 
                VALUES (:nombre_Clinica, :descripcion, :direccion)";
        $this->db->query($query);
        $this->db->bParam(':nombre_Clinica' , $Clinica->nombre_Clinica);
        $this->db->bParam(':descripcion', $Clinica->descripcion);
        $this->db->bParam(':direccion' , $Clinica->direccion);
        return $this->db->execute();
    }

    public function Actualizar($Clinica)
    {
        $query="UPDATE Clinica
                SET nombre_Clinica=:nombre_Clinica, descripcion=:descripcion, direccion=:direccion
                WHERE id_Clinica=:id_Clinica";
        $this->db->query($query);
        $this->db->bParam(':nombre_Clinica' , $Clinica->nombre_Clinica);
        $this->db->bParam(':descripcion', $Clinica->descripcion);
        $this->db->bParam(':direccion' , $Clinica->direccion);
        $this->db->bParam(':id_Clinica' , $Clinica->id_Clinica);
        return $this->db->execute();
    }

    public function Eliminar($id)
    {
        $query="DELETE FROM Clinica
                WHERE id_Clinica=:id_Clinica";
        $this->db->bParam($query);
        $this->db->bParam(':id_Clinica',$id);
        return $this->db->execute();
    } 
}
