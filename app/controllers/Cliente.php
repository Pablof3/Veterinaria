<?php
class Cliente extends Controller
{
    public function Registrar()
    {
        $cliente =new Core\Cliente;
        $cliente->id_Cliente=1;
        $cliente->nombre=$_POST['Cliente']['nombre'];
        $cliente->apellido=$_POST['Cliente']['apellido'];
        $cliente->ci=$_POST['Cliente']['ci'];
        $cliente->nit=$_POST['Cliente']['nit'];

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

            $cliente->Direccion[]=$nuevoDireccion;
        }
        $mCliente=new mCliente;
        $resp=$mCliente->Insertar($cliente);
        echo json_encode($resp);
    }
    public function vRegistrar()
    {
        $this->vista('Cliente/vRegistrar');
    }
    public function Actualizar()
    {
        $cliente=new Core\Cliente;
        $cliente->id_Cliente=1;
        $cliente->nombre='Pablo';
        $cliente->apellido='hilaquita';
        $cliente->ci='7938252';
        $cliente->nit='7938252456';
        $this->mCliente->Actualizar($cliente);  
    }

    public function vDetalle($id)
    {
        $mCliente=new mCliente;
        $cliente=$mCliente->GetCliente($id);
        $data=['Cliente'=>$cliente];
        $this->vista('Cliente/vDetalle', $data);
    }
    public function Eliminar()
    {
     
        $this->mCliente->Eliminar();  
    }

    public function vLista()
    {
        $this->vista('Cliente/vListar');
    }

    public function vTabla()
    {
        $mCliente=new mCliente;
        $pagActual=$_POST['Tabla']['pagActual']; 
        $limit=$_POST['Tabla']['limit'];
        $busqueda=$_POST['Tabla']['busqueda'];
        if (empty($busqueda))
        {
            $numReg=$mCliente->CountClientes();
            $numPag=ceil($numReg/$limit);
            $offset=($pagActual-1)*$limit;
            $clientes=$mCliente->GetList($offset, $limit);
            $data=['Clientes'=>$clientes,
                    'numPaginas'=>$numPag,
                    'pagActual'=>$pagActual];
            $this->vista('Cliente/Component/Tabla', $data);
        }
        else
        {
            $numReg=$mCliente->CountClientesSearch($busqueda);
            $numPag=ceil($numReg/$limit);
            $offset=($pagActual-1)*$limit;
            $clientes=$mCliente->GetListSearch($offset,$limit,$busqueda);
            $data=['Clientes'=>$clientes,
                    'numPaginas'=>$numPag,
                    'pagActual'=>$pagActual];
            $this->vista('Cliente/Component/Tabla', $data);
        }
    }
}

?>