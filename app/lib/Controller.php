<?php
//Carga mode los y vistas
class Controller
{
    //cargar modelp
    public function modelo($modelo)
    {
        require "../app/models/".$modelo.".php";
        //Instancia de modelo
        return new $modelo();
    }

      //cargar Vista
      public function vista($vista, $data=[])
      {
          //verificar si existe
          if (file_exists("../app/views/" . $vista . ".php")) 
          {
                require_once "../app/views/" . $vista . ".php" ;
          }
          else 
          {
              die("No existe la vista");
          }
      }
}

?>