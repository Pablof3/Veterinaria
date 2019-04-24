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
     * Obtiene un Arreglo de Clientes con Offset y Limit
     *
     * @param Int $offset Indice inicial
     * @param Int $limit Indice inicial
     * @return Array 
     **/
    public function GetList($offset=null, $limit=null)
    {
        $db=new Database;
        $query="SELECT * FROM Cliente
                ORDER BY id_Cliente DESC ";
        if (!is_null($offset) and !is_null($limit)) {
            $query.="LIMIT :offset, :limit";
            $db->prepare($query);
            $db->bindParam(':offset', $offset, PDO::PARAM_INT);
            $db->bindParam(':limit', $limit, PDO::PARAM_INT);
        }
        else{
            $db->prepare($query);
        }
        return $db->getRegistros();
    }

        /**
     * Get List Clientes
     *
     * Devuelve una lista de clientes con un offset y limit dado un criterio de busqueda
     *
     * @param Int $offset registro inicio
     * @param Int $limit numero de registros a partir de offset
     * @param String $busqueda  parametro de busqueda 
     * @return Array Arreglo de Clientes coincidentes con busqueda
     **/
    public function GetListSearch($offset, $limit, $busqueda)
    {
        $db=new Database;
        $busqueda="%{$busqueda}%";
        $query="SELECT *
                FROM Cliente
                WHERE nombre LIKE :busqueda 
                OR apellido LIKE :busqueda 
                ORDER BY id_cliente DESC
                LIMIT :offset, :limit";
        $db->prepare($query);
        $db->bindParam(':busqueda',$busqueda);
        $db->bindParam(':offset', $offset, PDO::PARAM_INT);
        $db->bindParam(':limit', $limit, PDO::PARAM_INT);
        return $db->getRegistros();
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

      /**
     * Numero de Registros de Clientes en Base de Datos
     *
     * @return Int
     **/
    public function CountClientes()
    {
        $db=new Database;
        $sql="SELECT COUNT(*) FROM Cliente";
        $db->prepare($sql);
        return $db->fetchColumn();
    }

    /**
     * Numero de Registros Coincidentes con una Busqueda
     * @param String $busqueda Parametro de Busqueda
     * @return Int
     **/
    public function CountClientesSearch($busqueda)
    {
        $db=new Database;
        $busqueda="%{$busqueda}%";
        $query="SELECT COUNT(*)
                FROM Cliente
                WHERE nombre LIKE :busqueda 
                OR apellido LIKE :busqueda";
        $db->prepare($query);
        $db->bindParam(':busqueda',$busqueda);
        return $db->fetchColumn();
    }
}
