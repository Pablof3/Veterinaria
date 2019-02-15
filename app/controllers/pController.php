<?php
class pController extends Controller
{
    public function __construct() {
        $this->model=$this->modelo('mModelo');
    }
    public function index()
    {
        $list=$this->model->prueba();
        print_r($list);
        echo "Veterinaria";
    }
}

?>