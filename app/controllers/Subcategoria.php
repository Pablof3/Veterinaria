<?php 
require "../app/core/NamespaceCore.php";
class Subcategoria extends Controller
{
    private $mSubcategoria;
    public function __construct() {
        $this->mSubcategoria=$this->modelo('mSubcategoria');
    }

    public function Registrar()
    {
        $subcategoria=new Core\Subcategoria;
        $subcategoria->id_Subcategoria=1;
        $subcategoria->id_Categoria=1;
        $subcategoria->nombre='Alimento';

        $this->mSubcategoria->Insertar($subcategoria);
    }
    public function Actualizar()
    {
        $subcategoria=new Core\Subcategoria;
        $subcategoria->id_Subcategoria=1;
        $subcategoria->id_Categoria=2;
        $subcategoria->nombre='Juguetes';

        $this->mSubcategoria->Actualizar($subcategoria);
    }
    public function Eliminar()
    {
        $this->mSubcategoria->Eliminar(1);
    }
}

?>