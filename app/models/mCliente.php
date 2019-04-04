<?php
class mCliente 
{
    public function Insertar(Core\Cliente $cliente)
    {
        $db=new Database;
        try {
            $db->beginTransaction();
            $query="INSERT INTO Cliente (nombre, apellido, ci, nit) 
                    VALUES (:nombre, :apellido, :ci, :nit)";
            $db->query($query);
            $db->bParam(':nombre' , $Cliente->nombre);
            $db->bParam(':apellido', $Cliente->apellido);
            $db->bParam(':ci' , $Cliente->ci);
            $db->bParam(':nit' , $Cliente->nit);

            // REegistrar Numeros
            $query="INSERT INTO NumContacto(id_NumPropietario, numero, tipo)
                    VALUES (:id_NumPropietario, :numero, :tipo)";
            $db->query($query);
            foreach ($cliente->NumContacto as  $nuevoContacto) {
                $db->bParam(':id_NumPropietario', $nuevoContacto->id_NumPropietario);
                $db->bParam(':numero',$nuevoContacto->numero);
                $db->bParam(':tipo', $nuevoContacto->tipo);
                $db->execute();
            }
            // Registrar Direcciones
            $query="INSERT INTO Direccion(id_DireccionPropietario, descripcion, direccion, latitud, longitud)
                    VALUES (:id_DireccionPropietario, :descripcion, :direccion, :latitud, :longitud )";
            $db->query($query);
            foreach ($cliente->Direccion as $nuevaDireccion) {
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
