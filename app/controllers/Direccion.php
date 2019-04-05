<?php
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
        $direccion->id_DireccionPropietario=$_POST['Direccion']['id_DireccionPropietario'];
        $direccion->descripcion=$_POST['Direccion']['descripcion'];
        $direccion->direccion=$_POST['Direccion']['direccion'];
        $direccion->latitud=$_POST['Direccion']['latitud'];
        $direccion->longitud=$_POST['Direccion']['longitud'];
        $this->mDireccion->Insertar($direccion);  
    }
    public function Actualizar()
    {
        $direccion=new Core\Direccion;
        $direccion->id_Direccion=$_POST['Direccion']['id_Direccion'];
        $direccion->id_DireccionPropietario=$_POST['DIreccion']['id_DireccionPropietario'];
        $direccion->descripcion=$_POST['Direccion']['descripcion'];
        $direccion->direccion=$_POST['Direccion']['direccion'];
        $direccion->latitud=$_POST['Direccion']['latitud'];
        $direccion->longitud=$_POST['Direccion']['longitud'];
        $this->mDireccion->Actualizar
        ($direccion);   
    }
    public function Eliminar()
    {
     
        $this->mDireccion->Eliminar();  
    }
}

?>