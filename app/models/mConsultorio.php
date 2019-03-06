<?php
class mConsultorio
{
    private $db;
    public function __construct() {
        $this->db = new Database();
    }

    public function Insertar($Consultorio)
    {
        $query="INSERT INTO Consultorio (id_Clinica, nombre, descripcion) 
                VALUES (:id_Clinica, :nombre, :descripcion)";
        $this->db->query($query);
        $this->db->bParam(':id_Clinica' , $Consultorio->id_Clinica);
        $this->db->bParam(':nombre', $Consultorio->nombre);
        $this->db->bParam(':descripcion', $Consultorio->descripcion);
        return $this->db->execute();
    }

    public function Actualizar($Consultorio)
    {
        $query="UPDATE Consultorio
                SET id_Clinica=:id_Clinica, nombre=:nombre, descripcion=:descripcion
                WHERE id_Consultorio=:id_Consultorio";
        $this->db->query($query);
        $this->db->bParam(':id_Clinicar' , $Consultorio->id_Clinica);
        $this->db->bParam(':nombre', $Consultorio->nombre);
        $this->db->bParam(':descripcion' , $Consultorio->descripcion);
        $this->db->bParam(':id_Consultorio' , $Consultorio->id_Consultorio);
        return $this->db->execute();
    }

    public function Eliminar($id)
    {
        $query="DELETE FROM Consultorio
                WHERE id_Consultorio=:id_Consultorio";
        $this->db->query($query);
        $this->db->bParam(':id_Consultorio',$id);
        return $this->db->execute();
    } 
}
