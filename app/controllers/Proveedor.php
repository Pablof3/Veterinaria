<?php 
class Proveedor extends Controller 
{
    

    public function Registrar()
    {
        $proveedor=new Core\Proveedor;
        $proveedor->id_Proveedor=$_POST['Proveedor']['id_Proveedor'];
        $proveedor->empresa=$_POST['Proveedor']['empresa'];
        $proveedor->ci=$_POST['Proveedor']['ci'];
        $proveedor->nit=null;
        $proveedor->encargado=$_POST['Proveedor']['encargado'];

        foreach ($_POST['Cliente']['NumContacto'] as $numContacto) 
        {
            $nuevoNumContacto=new Core\NumContacto;
            $nuevoNumContacto->id_NumContacto=1;
            $nuevoNumContacto->id_NumPropietario=1;
            $nuevoNumContacto->numero=$numContacto['numero'];
            $nuevoNumContacto->tipo=$numContacto['tipo'];

            $cliente->NumContacto[]=$nuevoNumContacto;
        }
        foreach ($_POST['Cliente']['Direccion'] as $direccion) {
            $nuevoDireccion=new Core\Direccion;
            $nuevoDireccion->id_Direccion=1;
            $nuevoDireccion->id_DireccionPropietario=1;
            $nuevoDireccion->descripcion=$direccion['descripcion'];
            $nuevoDireccion->direccion=$direccion['direccion'];
            $nuevoDireccion->latitud=$direccion['latitud'];
            $nuevoDireccion->longitud=$direccion['longitud'];

            $proveedor->Direccion[]=$nuevoDireccion;
        }

    }

    public function Actualizar()
    {
        $proveedor=new Core\Proveedor;
        $proveedor->id_Proveedor=$_POST['Proveedor']['id_Proveedor'];
        $proveedor->empresa=$_POST['Proveedor']['empresa'];
        $proveedor->ci=$_POST['Proveedor']['ci'];
        $proveedor->nit=null;
        $proveedor->encargado=$_POST['Proveedor']['encargado'];

        $this->mProveedor->Actualizar($proveedor);
    }

    public function Eliminar()
    {
        $this->mProveedor->Eliminar(1);
    }

    public function vRegistrar()
    {
        $this->vista('Proveedor/vRegistrar');
    }
}

?>