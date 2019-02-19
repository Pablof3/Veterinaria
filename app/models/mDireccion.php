<?php
class mDireccion
{
    private $db;
    public function __construct() {
        $this->db = new Database();
    }

    public function Insertar($Direccion)
    {
        $query="INSERT INTO Direccion (id_DireccionPropietario, descripcion, direccion, latitud, longitud) 
                VALUES (:id_DireccionPropietario, :descripcion, :direccion, :latitud, :longitud)";
        $this->db->query($query);
        $this->db->bParam(':id_DireccionPropietario' , $Direccion->id_DireccionPropietario);
        $this->db->bParam(':descripcion', $Direccion->descripcion);
        $this->db->bParam(':direccion', $Direccion->direccion);
        $this->db->bParam(':latitud', $Direccion->latitud);
        $this->db->bParam(':longitud', $Direccion->longitud);
        return $this->db->execute();
    }

    public function Actualizar($Direccion)
    {
        $query="UPDATE Direccion
                SET id_DireccionPropietario=:id_DireccionPropietario, descripcion=:descripcion, direccion=:direccion latitud=:latitud, longitud=:longitud
                WHERE id_Direccion=:id_Direccion";
        $this->db->query($query);
        $this->db->bParam(':id_DireccionPropietario' , $Direccion->id_DireccionPropietario);
        $this->db->bParam(':descripcion', $Direccion->descripcion);
        $this->db->bParam(':direccion', $Direccion->direccion);
        $this->db->bParam(':latitud', $Direccion->latitud);
        $this->db->bParam(':longitud', $Direccion->longitud);
        $this->db->bParam(':id_Direccion', $Direccion->id_Direccion);
        return $this->db->execute();
    }

    public function Eliminar($id)
    {
        $query="DELETE FROM Direccion
                WHERE id_Direccion=:id_Direccion";
        $this->db->bParam($query);
        $this->db->bParam(':id_Direccion',$id);
        return $this->db->execute();
    } 
}
