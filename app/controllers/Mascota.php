<?php
class Mascota extends Controller
{
    private $mMascota;
    public function __construct() {
        $this->mMascota=$this->modelo('mMascota');
    }
    public function Registrar()
    {
        $mascota=new Core\Mascota;
        $mascota->id_Mascota=$_POST['Mascota']['id_Mascota'];
        $mascota->id_Cliente=$_POST['Mascota']['id_Cliente'];
        $mascota->nombre_Mascota=$_POST['Mascota']['nombre_Mascota'];
        $mascota->tipo_Mascota=$_POST['Mascota']['tipo_Mascota'];
        $mascota->edad=$_POST['Mascota']['edad'];
        $mascota->peso=$_POST['Mascota']['peso'];
        $mascota->raza=$_POST['Mascota']['raza'];
        $this->mMascota->Insertar($mascota);  
    }
    public function Actualizar()
    {
        $mascota=new Core\Mascota;
        $mascota->id_Mascota=$_POST['Mascota']['id_Mascota'];
        $mascota->id_Cliente=$_POST['Mascota']['id_Cliente'];
        $mascota->nombre_Mascota=$_POST['Mascota']['nombre_Mascota'];
        $mascota->tipo_Mascota=$_POST['Mascota']['tipo_Mascota'];
        $mascota->edad=$_POST['Mascota']['edad'];
        $mascota->peso=$_POST['Mascota']['peso'];
        $mascota->raza=$_POST['Mascota']['raza'];
        $this->mMascota->Actualizar($mascota);  
    }
    public function Eliminar()
    {
     
        $this->mMascota->Eliminar(2);  
    }

    public function vRegistrar()
    {
        $this->vista('Mascota/vRegistrar');
    }
}

?>