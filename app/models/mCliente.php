<?php
class mCliente 
{
    private $db;
    public function __construct() {
        $this->db = new Database();
    }

    public function Insertar($Cliente)
    {
        $query="INSERT INTO Cliente (nombre, apellido, ci, nit) 
                VALUES (:nombre, :apellido, :ci, :nit)";
        $this->db->query($query);
        $this->db->bParam(':nombre' , $Cliente->nombre);
        $this->db->bParam(':apellido', $Cliente->apellido);
        $this->db->bParam(':ci' , $Cliente->ci);
        $this->db->bParam(':nit' , $Cliente->nit);
        return $this->db->execute();
    }

    public function Actualizar($Cliente)
    {
        $query="UPDATE Cliente
                SET nombre=:nombre, apellido=:apellido, ci=:ci, nit=:nit
                WHERE id_Cliente=:id_Cliente";
        $this->db->query($query);
        $this->db->bParam(':nombre' , $Cliente->nombre);
        $this->db->bParam(':apellido', $Cliente->apellido);
        $this->db->bParam(':ci' , $Cliente->ci);
        $this->db->bParam(':nit' , $Cliente->nit);
        $this->db->bParam(':id_Cliente' , $Cliente->id_Cliente);
        return $this->db->execute();
    }

    public function Eliminar($id)
    {
        $query="DELETE FROM Cliente
                WHERE id_Cliente=:id_Cliente";
        $this->db->query($query);
        $this->db->bParam(':id_Cliente',$id);
        return $this->db->execute();
    } 
}
