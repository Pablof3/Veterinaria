<?php 
class Paginas extends Controller
{
    public function __construct() 
    {
        //echo '[Controlador Paginas] ';
        $this->articuloModelo = $this->modelo('Articulo');
        
    }
    public function index()
    {
        $articulos=$this->articuloModelo->ObtenerArticulos();
        $data = [
            'titulo' => "Datos Paginas Index",
            'articulos' => $articulos];
        $this->vista("pages/index", $data);
    }
    public function articulo()
    {
        $this->vista("pages/articulo");
    }
    public function prueba()
    {
        echo "prueba Ajax";
    }

}
