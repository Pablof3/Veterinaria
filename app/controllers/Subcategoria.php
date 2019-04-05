<?php 
class Subcategoria extends Controller
{
    private $mSubcategoria;
    public function __construct() {
        $this->mSubcategoria=$this->modelo('mSubcategoria');
    }

    public function Registrar()
    {
        $subcategoria=new Core\Subcategoria;
        $subcategoria->id_Subcategoria=$_POST['Subcategoria']['id_Subcategoria'];
        $subcategoria->id_Categoria=$_POST['Subcategoria']['id_Categoria'];
        $subcategoria->nombre=$_POST['Subcategoria']['nombre'];

        $this->mSubcategoria->Insertar($subcategoria);
    }
    public function Actualizar()
    {
        $subcategoria=new Core\Subcategoria;
        $subcategoria->id_Subcategoria=$_POST['Subcategoria']['id_Subcategoria'];
        $subcategoria->id_Categoria=$_POST['Subcategoria']['id_Categoria'];
        $subcategoria->nombre=$_POST['Subcategoria']['nombre'];

        $this->mSubcategoria->Actualizar($subcategoria);
    }
    public function Eliminar()
    {
        $this->mSubcategoria->Eliminar(1);
    }
}

?>