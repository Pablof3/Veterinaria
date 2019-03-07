<?php
require "../app/core/NamespaceCore.php";
class Clinica extends Controller
{
    private $mClinica;
    public function __construct() 
    {
       $this->mClinica=$this->modelo('mClinica');
    }
    public function Registrar()
    {
        $clinica=new Core\Clinica;
        $clinica->nombre_Clinica='Mundo Animal';
        $clinica->descripcion='Clinica general de animales';
        $clinica->direccion=1;
        $this->mClinica->Insertar($clinica);  
    }
    public function Actualizar()
    {
        $clinica=new Core\Cliente;
        $clinica->id_Clinica=1;
        $clinica->nombre_Clinica='Huesitos';
        $clinica->descripcion='Clinica general de animales';
        $clinica->direccion=2;
        $this->mClinica->Actualizar($clinica);  
    }
    public function Eliminar()
    {
     
        $this->mClinica->Eliminar();  
    }
}

?>