<?php
class mImagen
{
    private $db;
    public function __construct() {
        $this->db=new Database();
    }

    public function Insertar($Imagen)
    {
        $query="INSERT INTO Imagen(id_Propietario, path ) 
                VALUES(:id_Propietario, :path)";
        $this->db->query($query);
        $this->db->bParam(':id_Propietario',$Imagen->id_Propietario);
        $this->db->bParam(':path',$Imagen->path);
        return $this->db->execute();
    }
    public function Actualizar($Imagen)
    {
        $query="UPDATE Imagen 
                SET id_Propietario=:id_Propietario, path=:path
                WHERE id_Imagen=:id_Imagen";
        $this->db->query($query);
        $this->db->bParam(':id_Propietario',$Imagen->id_Propietario);
        $this->db->bParam(':path',$Imagen->path);
        $this->db->bParam(':id_Imagen',$Imagen->id_Imagen);
        return $this->db->execute();
    }
    public function Eliminar($id)
    {
        $query="DELETE FROM Imagen 
                WHERE id_Imagen=:id_Imagen";
        $this->db->query($query);
        $this->db->bParam(':id_Imagen',$id);
        return $this->db->execute();
    }
}

?>