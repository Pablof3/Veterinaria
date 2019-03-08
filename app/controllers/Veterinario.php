<?php 
require "../app/core/NamespaceCore.php";
class Veterinario extends Controller 
{
    private $mVeterinario;
    public function __construct() {
        $this->mVeterinario=$this->modelo('mVeterinario');
    }

    public function Registrar()
    {
        $veterinario=new Core\Veterinario;
        $veterinario->id_Veterinario=1;
        $veterinario->nombre='Narciso Fortunato';
        $veterinario->apellido='Rafique Faisal';
        $veterinario->especialidad='Cirugia';

        $this->mVeterinario->Insertar($veterinario);
    }

    public function Actualizar()
    {
        $veterinario=new Core\Veterinario;
        $veterinario->id_Veterinario=1;
        $veterinario->nombre='Narciso Fortunato';
        $veterinario->apellido='Rafique Faisal';
        $veterinario->especialidad='Dermatologia';

        $this->mVeterinario->Actualizar($veterinario);
    }

    public function Eliminar()
    {
        $this->mVeterinario->Eliminar(3);
    }
}

?>