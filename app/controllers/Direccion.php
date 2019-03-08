<?php
require "../app/core/NamespaceCore.php";
class Direccion extends Controller
{
    private $mDiagnostico;
    public function __construct() 
    {
       $this->mDireccion=$this->modelo('mDireccion');
    }
    public function Registrar()
    {
        $direccion=new Core\Direccion;
        $direccion->id_DireccionPropietario=1;
        $direccion->descripcion='Casa amarilla';
        $direccion->direccion='Av.segunda entre pasaje luna y calle ramon';
        $direccion->latitud=123.12345;
        $direccion->longitud=456.78945;
        $this->mDireccion->Insertar($direccion);  
    }
    public function Actualizar()
    {
        $direccion=new Core\Direccion;
        $direccion->id_Direccion=1;
        $direccion->id_DireccionPropietario=1;
        $direccion->descripcion='Casa roja';
        $direccion->direccion='Av.segunda entre pasaje luna y calle ramon';
        $direccion->latitud=123.12345;
        $direccion->longitud=456.78945;
        $this->mDireccion->Actualizar
        ($direccion);   
    }
    public function Eliminar()
    {
     
        $this->mDireccion->Eliminar();  
    }
}

?>