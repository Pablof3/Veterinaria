<?php
class mTipoContacto
{
    private $db;
    public function __construct() {
        $this->db=new Database();
    }
    public function Insertar($tipoContacto)
    {
        $query="INSERT INTO TipoContacto(nombre)
                VALUES (:nombre)";
        $this->db->query($query);
        $this->db->bParam(':nombre',$tipoContacto->nombre);
        return $this->db->execute();
    }
    public function Actualizar($tipoContacto)
    {
        $query="UPDATE TipoContacto 
                SET nombre=:nombre
                WHERE id_TipoContacto=:id_TipoContacto";
        $this->db->query($query);
        $this->db->bParam(':nombre',$tipoContacto->nombre);
        $this->db->bParam(':id_TipoContacto',$tipoContacto->id_TipoContacto);
        return $this->db->execute();
    }
    public function Eliminar($id)
    {
        $query="DELETE FROM TipoContacto 
                WHERE id_TipoContacto=:id_TipoContacto";
        $this->db->query($query);
        $this->db->bParam(':id_TipoContacto',$id);
        return $this->db->execute();
    }
}

?>