<?php 
class Usuario extends Controller 
{
    private $mUsuario;
    public function __construct() {
        $this->mUsuario=$this->modelo('mUsuario');
    }

    public function Registrar()
    {
        $usuario=new Core\Usuario;
        $usuario->id_Usuario=$_POST['Usuario']['id_Usuario'];
        $usuario->username=$_POST['Usuario']['username'];
        $usuario->email=$_POST['Usuario']['email'];
        $usuario->password=$_POST['Usuario']['password'];
        $usuario->cargo=1;

        $this->mUsuario->Insertar($usuario);
    }

    public function Actualizar()
    {
        $usuario=new Core\Usuario;
        $usuario->id_Usuario=$_POST['Usuario']['id_Usuario'];
        $usuario->username=$_POST['Usuario']['username'];
        $usuario->email=$_POST['Usuario']['email'];
        $usuario->password=$_POST['Usuario']['password'];
        $usuario->cargo=2;

        $this->mUsuario->Actualizar($usuario);
    }

    public function Eliminar()
    {
        $this->mUsuario->Eliminar(1);
    }
}

?>