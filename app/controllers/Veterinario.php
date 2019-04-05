<?php 
class Veterinario extends Controller 
{
    private $mVeterinario;
    public function __construct() {
        $this->mVeterinario=$this->modelo('mVeterinario');
    }

    public function Registrar()
    {
        $veterinario=new Core\Veterinario;
        $veterinario->id_Veterinario=$_POST['Veterinario']['id_Veterinario'];
        $veterinario->nombre=$_POST['Veterinario']['nombre'];
        $veterinario->apellido=$_POST['Veterinario']['apellido'];
        $veterinario->especialidad=$_POST['Veterinario']['especialidad'];

        foreach ($_POST['Veterinario']['NumContacto'] as $numContacto) 
        {
            $nuevoNumContacto=new Core\NumContacto;
            $nuevoNumContacto->id_NumContacto=1;
            $nuevoNumContacto->id_NumPropietario=1;
            $nuevoNumContacto->numero=$numContacto['numero'];
            $nuevoNumContacto->tipo=$numContacto['tipo'];

            $veterinario->NumContacto[]=$nuevoNumContacto;
        }
        foreach ($_POST['Veterinario']['Direccion'] as $direccion) {
            $nuevoDireccion=new Core\Direccion;
            $nuevoDireccion->id_Direccion=1;
            $nuevoDireccion->id_DireccionPropietario=1;
            $nuevoDireccion->descripcion=$direccion['descripcion'];
            $nuevoDireccion->direccion=$direccion['direccion'];
            $nuevoDireccion->latitud=$direccion['latitud'];
            $nuevoDireccion->longitud=$direccion['longitud'];

            $veterinario->Direccion[]=$nuevoDireccion;
        }

        var_dump[$veterinario];
    }

    public function Actualizar()
    {
        $veterinario=new Core\Veterinario;
        $veterinario->id_Veterinario=$_POST['Veterinario']['id_Veterinario'];
        $veterinario->nombre=$_POST['Veterinario']['nombre'];
        $veterinario->apellido=$_POST['Veterinario']['apellido'];
        $veterinario->especialidad=$_POST['Veterinario']['especialidad'];

        $this->mVeterinario->Actualizar($veterinario);
    }

    public function Eliminar()
    {
        $this->mVeterinario->Eliminar(3);
    }

    public function vRegistrar()
    {
        $this->vista('Veterinario/vRegistrar');
    }
}

?>