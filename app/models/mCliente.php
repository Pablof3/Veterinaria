<?php
class mCliente 
{
    public function Insertar(Core\Cliente $cliente)
    {
        $resp['status']=true;
        $db=new Database;
        try {
            $db->beginTransaction();
            $query="INSERT INTO Cliente (nombre, apellido, ci, nit) 
                    VALUES (:nombre, :apellido, :ci, :nit)";
            $db->query($query);
            $db->bParam(':nombre' , $cliente->nombre);
            $db->bParam(':apellido', $cliente->apellido);
            $db->bParam(':ci' , $cliente->ci);
            $db->bParam(':nit' , $cliente->nit);
            $db->execute();
            // REegistrar Numeros
            $query1="INSERT INTO NumContacto(id_NumPropietario, numero, tipo)
                    VALUES (:id_NumPropietario, :numero, :tipo)";
            $db->query($query1);
            foreach ($cliente->NumContacto as  $nuevoContacto) {
                $db->bParam(':id_NumPropietario', $nuevoContacto->id_NumPropietario);
                $db->bParam(':numero',$nuevoContacto->numero);
                $db->bParam(':tipo', $nuevoContacto->tipo);
                $db->execute();
            }
            // Registrar Direcciones
            $query2="INSERT INTO Direccion(id_DireccionPropietario, descripcion, direccion, latitud, longitud)
                    VALUES (:id_DireccionPropietario, :descripcion, :direccion, :latitud, :longitud )";
            $db->query($query2);
            foreach ($cliente->Direccion as $nuevaDireccion) {
                $db->bParam(':id_DireccionPropietario',$nuevaDireccion->id_DireccionPropietario);
                $db->bParam(':descripcion', $nuevaDireccion->descripcion);
                $db->bParam(':direccion', $nuevaDireccion->direccion);
                $db->bParam(':latitud', $nuevaDireccion->latitud);
                $db->bParam(':longitud', $nuevaDireccion->longitud);
                $db->execute();
            }
            $db->commit();
        } 
        catch (PDOException $th) {
            $resp['status']=false;
            $db->rollback();
        }
        return $resp;
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
    
    /**
     * Recupera un Cliente por Id
     * @param Int $id Id de Cliente
     * @return Core\Cliente
     **/
    public function GetCliente($id)
    {
        $db=new Database;
        $cliente=new Core\Cliente;
        $resp['status']=true;
        try {
            $db->beginTransaction();
            $query="SELECT * 
                    FROM Cliente 
                    WHERE id_Cliente=:id";
            $db->query($query);
            $db->bParam(':id', $id);
            $cliente=$db->getRegistro();

            $query="SELECT * 
                    FROM NumContacto
                    WHERE id_NumPropietario=:id";
            $db->query($query);
            $db->bParam(':id', $id);
            $numContactos=$db->getRegistros();

            $query="SELECT nombre 
                    FROM TipoContacto
                    WHERE id_TipoContacto=:id_TipoContacto";
            $db->query($query);
            foreach ($numContactos as $numContacto) {
                $db->bParam(':id_TipoContacto', $numContacto->tipo);
                $numContacto->tipo=$db->fetchColumn();
            }
            $cliente->NumContacto=$numContactos;
            $query="SELECT *
                    FROM Direccion
                    WHERE id_DireccionPropietario=:id";
            $db->query($query);
            $db->bParam(':id',$id);
            $cliente->Direccion=$db->getRegistros();

            $db->commit();
        } catch (Throwable $th) {
            $resp['status']=false;
            $db->rollback();
        }
        return $cliente;
    }
}
