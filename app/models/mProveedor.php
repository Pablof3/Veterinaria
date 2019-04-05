<?php 
class mProveedor  
{
    

    public function Insertar($proveedor)
    {
        $db=new Database;
        try {
            $db->beginTransaction();
        $query="INSERT INTO Proveedor(empresa, ci, nit, encargado)
                VALUES (:empresa, :ci, :nit, :encargado)";
        $this->db->query($query);
        $this->db->bParam(':empresa',$proveedor->empresa);
        $this->db->bParam(':ci',$proveedor->ci);
        $this->db->bParam(':nit',$proveedor->nit);
        $this->db->bParam(':encargado',$proveedor->encargado);
        
        // REegistrar Numeros
            $query="INSERT INTO NumContacto(id_NumPropietario, numero, tipo)
                    VALUES (:id_NumPropietario, :numero, :tipo)";
            $db->query($query);
            foreach ($proveedor->NumContacto as  $nuevoContacto) {
                $db->bParam(':id_NumPropietario', $nuevoContacto->id_NumPropietario);
                $db->bParam(':numero',$nuevoContacto->numero);
                $db->bParam(':tipo', $nuevoContacto->tipo);
                $db->execute();
            }
            // Registrar Direcciones
            $query="INSERT INTO Direccion(id_DireccionPropietario, descripcion, direccion, latitud, longitud)
                    VALUES (:id_DireccionPropietario, :descripcion, :direccion, :latitud, :longitud )";
            $db->query($query);
            foreach ($proveedor->Direccion as $nuevaDireccion) {
                $db->bParam(':id_DireccionPropietario',$nuevaDireccion->id_DireccionPropietario);
                $db->bParam(':descripcion', $nuevaDireccion->descripcion);
                $db->bParam(':direccion', $nuevaDireccion->direccion);
                $db->bParam(':latitud', $nuevaDireccion->latitud);
                $db->bParam(':longitud', $nuevaDireccion->longitud);
            }
            $db->commit();
        } catch (Throwable $th) {
            $db->rollback();
        }
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