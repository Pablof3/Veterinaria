<?php 
require "../app/core/NamespaceCore.php";
class Usuario extends Controller 
{
    private $mUsuario;
    public function __construct() {
        $this->mUsuario=$this->modelo('mUsuario');
    }

    public function Registrar()
    {
        $usuario=new Core\Usuario;
        $usuario->id_Usuario=1;
        $usuario->username='Usuario1';
        $usuario->email='Usuario1@Vet.com';
        $usuario->password='pUsuario1';
        $usuario->cargo=1;

        $this->mUsuario->Insertar($usuario);
    }

    public function Actualizar()
    {
        $usuario=new Core\Usuario;
        $usuario->id_Usuario=1;
        $usuario->username='Usuario';
        $usuario->email='Usuario@Vet.com';
        $usuario->password='pUsuario';
        $usuario->cargo=2;

        $this->mUsuario->Actualizar($usuario);
    }

    public function Eliminar()
    {
        $this->mUsuario->Eliminar(1);
    }
}

?>