<?php 
class mVeterinario
{
    
    public function Insertar(Core\Veterinario $veterinario)
    {
        $db=new Database;
        try{

            $query="INSERT INTO Veterinario(nombre, apellido, especialidad)
                    VALUES (:nombre, :apellido, :especialidad)";
            $this->db->query($query);
            $this->db->bParam(':nombre',$veterinario->nombre);
            $this->db->bParam(':apellido',$veterinario->apellido);
            $this->db->bParam(':especialidad',$veterinario->especialidad);

             // REegistrar Numeros
             $query="INSERT INTO NumContacto(id_NumPropietario, numero, tipo)
             VALUES (:id_NumPropietario, :numero, :tipo)";
             $db->query($query);
             foreach ($veterinario->NumContacto as  $nuevoContacto) {
             $db->bParam(':id_NumPropietario', $nuevoContacto->id_NumPropietario);
             $db->bParam(':numero',$nuevoContacto->numero);
             $db->bParam(':tipo', $nuevoContacto->tipo);
             $db->execute();
            }

            // Registrar Direcciones
            $query="INSERT INTO Direccion(id_DireccionPropietario, descripcion, direccion, latitud, longitud)
                    VALUES (:id_DireccionPropietario, :descripcion, :direccion, :latitud, :longitud )";
            $db->query($query);
            foreach ($veterinario->Direccion as $nuevaDireccion) {
                $db->bParam(':id_DireccionPropietario',$nuevaDireccion->id_DireccionPropietario);
                $db->bParam(':descripcion', $nuevaDireccion->descripcion);
                $db->bParam(':direccion', $nuevaDireccion->direccion);
                $db->bParam(':latitud', $nuevaDireccion->latitud);
                $db->bParam(':longitud', $nuevaDireccion->longitud);
            }
            $db->commit();
        }
        catch (Throwable $th) {
            $db->rollback();
        }
        
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