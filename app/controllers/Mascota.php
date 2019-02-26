<?php
require "../app/core/NamespaceCore.php";
class Mascota extends Controller
{
    private $mMascota;
    public function __construct() {
        $this->mMascota=$this->modelo('mMascota');
    }
    public function Registrar()
    {
        $mascota=new Core\Mascota;
        //$mascota->id_Mascota=1;
        $mascota->id_Cliente=1;
        $mascota->nombre_Mascota='Charlie';
        $mascota->tipo_Mascota='Perro';
        $mascota->edad=4;
        $mascota->peso=3;
        $mascota->raza='Boxer';
        $this->mMascota->Insertar($mascota);  
    }
    public function Actualizar()
    {
        $mascota=new Core\Mascota;
        $mascota->id_Mascota=2;
        $mascota->id_Cliente=1;
        $mascota->nombre_Mascota='Charlie';
        $mascota->tipo_Mascota='gato';
        $mascota->edad=4;
        $mascota->peso=3;
        $mascota->raza='Persa';
        $this->mMascota->Actualizar($mascota);  
    }
    public function Eliminar()
    {
     
        $this->mMascota->Eliminar(2);  
    }
}

?>