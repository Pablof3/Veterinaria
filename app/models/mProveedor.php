<?php 
class mProveedor  
{
    private $db;
    public function __construct() {
        $this->db=new Database();
    }

    public function Insertar($proveedor)
    {
        $query="INSERT INTO Proveedor(empresa, ci, nit, encargado)
                VALUES (:empresa, :ci, :nit, :encargado)";
        $this->db->query($query);
        $this->db->bParam(':empresa',$proveedor->empresa);
        $this->db->bParam(':ci',$proveedor->ci);
        $this->db->bParam(':nit',$proveedor->nit);
        $this->db->bParam(':encargado',$proveedor->encargado);
        return $this->db->execute();
    }
    public function Actualizar($proveedor)
    {
        $query="UPDATE Proveedor 
                SET empresa=:empresa, ci=:ci, nit=:nit, encargado=:encargado
                WHERE id_Proveedor=:id_Proveedor";
        $this->db->query($query);
        $this->db->bParam(':empresa',$proveedor->empresa);
        $this->db->bParam(':ci',$proveedor->ci);
        $this->db->bParam(':nit',$proveedor->nit);
        $this->db->bParam(':encargado',$proveedor->encargado);
        $this->db->bParam(':id_Proveedor',$proveedor->id_Proveedor);
        return $this->db->execute();
    }
    public function Eliminar($id)
    {
        $query="DELETE FROM Proveedor 
                WHERE id_Proveedor=:id_Proveedor";
        $this->db->query($query);
        $this->db->bParam(':id_Proveedor',$id);
        return $this->db->execute();
    }
}
?>