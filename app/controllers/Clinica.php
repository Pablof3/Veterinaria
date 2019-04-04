<?php
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
        $clinica->nombre_Clinica=$_POST['Clinica']['nombre_Clinica'];
        $clinica->descripcion=$_POST['Clinica']['descripcion'];
        $clinica->direccion=$_POST['Clinica']['direccion'];
        $this->mClinica->Insertar($clinica);  
    }
    public function Actualizar()
    {
        $clinica=new Core\Cliente;
        $clinica->id_Clinica=$_POST['Clinica']['id_Clinica'];
        $clinica->nombre_Clinica=$_POST['Clinica']['nombre'];
        $clinica->descripcion=$_POST['Clinica']['descripcion'];
        $clinica->direccion=$_POST['Clinica']['direccion'];
        $this->mClinica->Actualizar($clinica);  
    }
    public function Eliminar()
    {
     
        $this->mClinica->Eliminar();  
    }
}

?>