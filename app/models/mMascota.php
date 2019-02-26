<?php
class mMascota
{
    private $db;
    public function __construct() {
        $this->db=new Database();
    }
    public function Insertar($mascota)
    {
        $query="INSERT INTO Mascota(id_Cliente, nombre_Mascota, tipo_Mascota, edad, peso, raza) 
                VALUES(:id_Cliente, :nombre_Mascota, :tipo_Mascota, :edad, :peso, :raza)";
        $this->db->query($query);
        $this->db->bParam(':id_Cliente',$mascota->id_Cliente);
        $this->db->bParam(':nombre_Mascota',$mascota->nombre_Mascota);
        $this->db->bParam(':tipo_Mascota',$mascota->tipo_Mascota);
        $this->db->bParam(':edad',$mascota->edad);
        $this->db->bParam(':peso',$mascota->peso);
        $this->db->bParam(':raza',$mascota->raza);
        return $this->db->execute();
    }
    public function Actualizar($mascota)
    {
        $query="UPDATE Mascota 
                SET id_Cliente=:id_Cliente, nombre_Mascota=:nombre_Mascota, tipo_Mascota=:tipo_Mascota, edad=:edad, peso=:peso, raza=:raza
                WHERE id_Mascota=:id_Mascota";
        $this->db->query($query);
        $this->db->bParam(':id_Cliente',$mascota->id_Cliente);
        $this->db->bParam(':nombre_Mascota',$mascota->nombre_Mascota);
        $this->db->bParam(':tipo_Mascota',$mascota->tipo_Mascota);
        $this->db->bParam(':edad',$mascota->edad);
        $this->db->bParam(':peso',$mascota->peso);
        $this->db->bParam(':raza',$mascota->raza);
        return $this->db->execute();
    }
    public function Eliminar($id)
    {
        $query="DELETE FROM Mascota 
                WHERE id_Mascota=:id_Mascota";
        $this->db->query($query);
        $this->db->bParam(':id_Mascota',$id);
        return $this->db->execute();
    }
}

?>