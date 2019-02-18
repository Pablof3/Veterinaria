<?php
class mNumContacto
{
    private $db;
    public function __construct() {
        $this->db=new Database();
    }
    public function Insertar($numContacto)
    {
        $query="INSERT INTO NumContacto(id_NumPropietario, numero, tipo)
                VALUES (:id_NumPropietario, :numero, :tipo)";
        $this->db->query($query);
        $this->db->bParam(':id_NumPropietario',$numContacto->id_NumPropietario);
        $this->db->bParam(':numero',$numContacto->numero);
        $this->db->bParam(':tipo',$numContacto->tipo);
        return $this->db->execute();
    }
    public function Actualizar($numContacto)
    {
        $query="UPDATE NumContacto 
                SET id_NumPropietario=:id_NumPropietario, numero=:numero, tipo=:tipo
                WHERE id_NumContacto=:id_NumContacto";
        $this->db->query($query);
        $this->db->bParam(':id_NumPropietario',$numContacto->id_NumPropietario);
        $this->db->bParam(':numero',$numContacto->numero);
        $this->db->bParam(':tipo',$numContacto->tipo);
        $this->db->bParam(':id_NumContacto',$numContacto->id_NumContacto);
        return $this->db->execute();
    }
    public function Eliminar($id)
    {
        $query="DELETE FROM NumContacto 
                WHERE id_NumContacto=:id_NumContacto";
        $this->db->query($query);
        $this->db->bParam(':id_NumContacto',$id);
        return $this->db->execute();
    }
}

?>