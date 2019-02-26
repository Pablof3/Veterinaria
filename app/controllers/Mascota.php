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
        $mascota->id_Cliente=1;
        $mascota->nombre_Mascota='Batuke';
        $mascota->tipo_Mascota='perro';
        $mascota->edad=3;
        $mascota->peso=5.5;
        $mascota->raza='Mastin';
        print_r($mascota);
        $this->mMascota->Insertar($mascota);        
    }
}

?>