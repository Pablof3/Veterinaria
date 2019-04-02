<?php
require "../app/core/NamespaceCore.php";
class Categoria extends Controller
{
    private $mCategoria;
    public function __construct() {
        $this->mCategoria=$this->modelo('mCategoria');
    }
    public function Registrar()
    {
        $categoria=new Core\Categoria;
        $categoria->nombre='Juguetes';
        $this->mCategoria->Insertar($categoria);  
    }
    public function Actualizar()
    {
        $categoria=new Core\Categoria;
        $categoria->id_Categoria=1;
        $categoria->nombre='Alimentos';
        $this->mCategoria->Actualizar($categoria);  
    }
    public function Eliminar()
    {
     
        $this->mCategoria->Eliminar();  
    }

    public function vRegistrar()
    {
        $this->vista('Categoria/vRegistrar');
    }
}

?>