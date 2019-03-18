<?php
require "../app/core/NamespaceCore.php";
class Cliente extends Controller
{
    private $mCliente;
    public function __construct() 
    {
      // $this->mCliente=$this->modelo('mCliente');
    }
    public function Registrar()
    {
        $cliente=(object)$_POST['Cliente'];
        //$this->mCliente->Insertar($cliente);  
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
    public function Eliminar()
    {
     
        $this->mCliente->Eliminar();  
    }

    public function vRegistrar()
    {
        $data=['saludo'=>'Soy Cliente'];
        $this->vista('Cliente/vRegistrar', $data);
    }
}

?>