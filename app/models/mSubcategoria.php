<?php 
class mSubcategoria
{
    private $db;
    public function __construct() {
        $this->db=new Database();
    }
    public function Insertar($subcategoria)
    {
        $query="INSERT INTO Subcategoria(id_Categoria, nombre)
                VALUES (:id_Categoria, :nombre)";
        $this->db->query($query);
        $this->db->bParam(':id_Categoria',$subcategoria->id_Categoria);
        $this->db->bParam(':nombre',$subcategoria->nombre);
        return $this->db->execute();
    }
    public function Actualizar($subcategoria)
    {
        $query="UPDATE Subcategoria 
                SET id_Categoria=:id_Categoria, nombre=:nombre
                WHERE id_Subcategoria=:id_Subcategoria";
        $this->db->query($query);
        $this->db->bParam(':id_Categoria',$subcategoria->id_Categoria);
        $this->db->bParam(':nombre',$subcategoria->nombre);
        $this->db->bParam(':id_Subcategoria',$subcategoria->id_Subcategoria);
        return $this->db->execute();
    }
    public function Eliminar($id)
    {
        $query="DELETE FROM Subcategoria 
                WHERE id_Subcategoria=:id_Subcategoria";
        $this->db->query($query);
        $this->db->bParam(':id_Subcategoria',$id);
        return $this->db->execute();
    }
}
?>