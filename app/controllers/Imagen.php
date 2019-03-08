<?php
require "../app/core/NamespaceCore.php";
class Imagen extends Controller
{
    private $mImagen;
    public function __construct() 
    {
       $this->mImagen=$this->modelo('mImagen');
    }
    public function Registrar()
    {
        $imagen=new Core\Imagen;
        $imagen->id_Propietario=1;
        $imagen->path='ubicacion';
        $this->mImagen->Insertar($imagen);  
    }
    public function Actualizar()
    {
        $imagen=new Core\Imagen;
        $imagen->id_Imagen=1;
        $imagen->id_Propietario=1;
        $imagen->path='ubicacion1';
        $this->mImagen->Actualizar($imagen);   
    }
    public function Eliminar()
    {
     
        $this->mImagen->Eliminar(1);  
    }
}

?>