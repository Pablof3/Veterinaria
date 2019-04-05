<?php
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
        $imagen->id_Propietario=$_POST['Imagen']['id_Propietario'];
        $imagen->path=$_POST['Imagen']['path'];
        $this->mImagen->Insertar($imagen);  
    }
    public function Actualizar()
    {
        $imagen=new Core\Imagen;
        $imagen->id_Imagen=$_POST['Imagen']['id_Imagen'];
        $imagen->id_Propietario=$_POST['Imagen']['id_Propietario'];
        $imagen->path=$_POST['Imagen']['path'];
        $this->mImagen->Actualizar($imagen);   
    }
    public function Eliminar()
    {
     
        $this->mImagen->Eliminar(1);  
    }
}

?>