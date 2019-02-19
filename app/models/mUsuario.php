<?php 
class mUsuario  
{
    private $db;
    public function __construct() {
        $this->db=new Database();
    }
    public function Insertar($usuario)
    {
        $query="INSERT INTO Usuario(username, email, password, cargo)
                VALUES (:username, :email, :password, :cargo)";
        $this->db->query($query);
        $this->db->bParam(':username',$usuario->username);
        $this->db->bParam(':email',$usuario->email);
        $this->db->bParam(':password',$usuario->password);
        $this->db->bParam(':cargo',$usuario->cargo);
        return $this->db->execute();
    }
    public function Actualizar($usuario)
    {
        $query="UPDATE Usuario 
                SET username=:username, email=:email, password=:password, cargo=:cargo
                WHERE id_Usuario=:id_Usuario";
        $this->db->query($query);
        $this->db->bParam(':username',$usuario->username);
        $this->db->bParam(':email',$usuario->email);
        $this->db->bParam(':password',$usuario->password);
        $this->db->bParam(':cargo',$usuario->cargo);
        $this->db->bParam(':id_Usuario',$usuario->id_Usuario);
        return $this->db->execute();
    }
    public function Eliminar($id)
    {
        $query="DELETE FROM Usuario 
                WHERE id_Usuario=:id_Usuario";
        $this->db->query($query);
        $this->db->bParam(':id_Usuario',$id);
        return $this->db->execute();
    }
}
?>