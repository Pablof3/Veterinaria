<?php 
class mVeterinario
{
    private $db;
    public function __construct() {
        $this->db=new Database();
    }
    public function Insertar($veterinario)
    {
        $query="INSERT INTO Veterinario(nombre, apellido, especialidad)
                VALUES (:nombre, :apellido, :especialidad)";
        $this->db->query($query);
        $this->db->bParam(':nombre',$veterinario->nombre);
        $this->db->bParam(':apellido',$veterinario->apellido);
        $this->db->bParam(':especialidad',$veterinario->especialidad);
        return $this->db->execute();
    }
    public function Actualizar($veterinario)
    {
        $query="UPDATE Veterinario 
                SET nombre=:nombre, apellido=:apellido, especialidad=:especialidad
                WHERE id_Veterinario=:id_Veterinario";
        $this->db->query($query);
        $this->db->bParam(':nombre',$veterinario->nombre);
        $this->db->bParam(':apellido',$veterinario->apellido);
        $this->db->bParam(':especialidad',$veterinario->especialidad);
        $this->db->bParam(':id_Veterinario',$veterinario->id_Veterinario);
        return $this->db->execute();
    }
    public function Eliminar($id)
    {
        $query="DELETE FROM Veterinario 
                WHERE id_Veterinario=:id_Veterinario";
        $this->db->query($query);
        $this->db->bParam(':id_Veterinario',$id);
        return $this->db->execute();
    }
}
?>