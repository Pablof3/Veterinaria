<?php

class mCategoria
{
    private $db;
    public function __construct() {
        $this->db = new Database();
    }
    
    public function Insertar($Categoria)
    {
        $query="INSERT INTO Categoria(nombre) 
                VALUES (:nombre)";
        $this->db->query($query);
        $this->db->bParam(':nombre',$Categoria->nombre);
        return $this->db->execute();
    }

    public function Actualizar($Categoria)
    {
        $query="UPDATE Categoria 
                SET nombre=:nombre 
                WHERE id_Categoria=:id_Categoria";
        $this->db->query($query);
        $this->db->bParam(':nombre',$Categoria->nombre);
        $this->db->bParam(':id_Categoria',$Categoria->id_Categoria);
        return $this->db->execute();
    }

    public function Eliminar($id)
    {
        $query="DELETE FROM Categoria 
                WHERE id_Categoria=:id_Categoria";
        $this->db->query($query);
        $this->db->bParam(':id_Categoria',$id);
        return $this->db->execute();
    }
}