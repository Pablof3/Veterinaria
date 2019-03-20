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

        $_POST['Cliente'];
        foreach ($_POST['Cliente'] as $campo) {
           
            var_dump(trim($campo));
            print_r($campo);
            echo'<br>';
        }
        
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
        $this->vista('Cliente/vRegistrar');
    }
}

?>