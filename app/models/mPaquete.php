<?php 
class mPaquete 
{
    private $db;
    public function __construct() {
        $this->db=new Database();
    }
    public function Insertar($paquete)
    {
        try {
            //Transaccion
            $this->db->beginTransaction();
            $query="INSERT INTO Paquete(nombre, precio, descripcion)
            VALUES (:nombre, :precio, :descripcion)";
            $this->db->query($query);
            $this->db->bParam(':nombre',$paquete->nombre);
            $this->db->bParam(':precio',$paquete->precio);
            $this->db->bParam(':descripcion',$paquete->descripcion);
            $this->db->execute();
            $id_Paquete=$this->db->lastInsertId();
    
            $query1="INSERT INTO PaqueteServicio(id_Paquete, id_Servicio)
                    VALUES(:id_Paquete, :id_Servicio)";
            $this->db->query($query1);
            foreach ($paquete->idServicios as $idServicio) {
                $this->db->bParam(':id_Paquete', $id_Paquete);
                $this->db->bParam(':id_Servicio', $idServicio);
                $this->db->execute();
            }
    
            $this->db->commit();
            
        } catch (Exception $e) {
            
            print_r($e);
        }
    }
    public function Actualizar($paquete)
    {
        try {
            //Transaccion
            $this->db->beginTransaction();
            $query="UPDATE Paquete 
                SET nombre=:nombre, precio=:precio, descripcion=:descripcion
                WHERE id_Paquete=:id_Paquete";
            $this->db->query($query);
            $this->db->bParam(':nombre',$paquete->nombre);
            $this->db->bParam(':precio',$paquete->precio);
            $this->db->bParam(':descripcion',$paquete->descripcion);
            $this->db->bParam(':id_Paquete',$paquete->id_Paquete);
            $this->db->execute();

            $query1="DELETE FROM PaqueteServicio
                        WHERE id_Paquete=:id_Paquete";
            $this->db->query($query1);
            $this->db->bParam(':id_Paquete', $paquete->id_Paquete);
            $this->db->execute();

            $query2="INSERT INTO PaqueteServicio(id_Paquete, id_Servicio)
            VALUES(:id_Paquete, :id_Servicio)";
            $this->db->query($query2);
            foreach ($paquete->idServicios as $idServicio) {
                $this->db->bParam(':id_Paquete', $paquete->id_Paquete);
                $this->db->bParam(':id_Servicio', $idServicio);
                $this->db->execute();
            }
            
            $this->db->commit();
            
        } catch (Exception $e) {
            print_r($e);
        }
        
    }
    public function Eliminar($id)
    {
        $query="DELETE FROM Paquete 
                WHERE id_Paquete=:id_Paquete";
        $this->db->query($query);
        $this->db->bParam(':id_Paquete',$id);
        return $this->db->execute();
    }
}
?>