<?php
require_once "../app/core/NamespaceCore.php";
class Notificacion extends Controller 
{
    private $mNotificacion;
    public function __construct()
    {
        $this->mNotificacion=$this->modelo('mNotificacion');
    }
    public function Registrar()
    {
        $notificacion=new Core\Notificacion;
        $notificacion->id_Notificacion=1;
        $notificacion->id_Cliente=1;
        $notificacion->mensaje='Mensaje Prueba';
        $notificacion->fecha_Envio='2019-06-20 20:30:00';
        print_r($notificacion);
        $this->mNotificacion->Insertar($notificacion);
    }
    public function Actualizar()
    {
        $notificacion=new Core\Notificacion;
        $notificacion->id_Notificacion=1;
        $notificacion->id_Cliente=1;
        $notificacion->mensaje='Mensaje Prueba Actulizado';
        $notificacion->fecha_Envio='2019-08-10 13:00:00';
        print($notificacion);

        $this->mNotificacion->Actualizar($notificacion);
    }
    public function Eliminar()
    {
        $this->mNotificacion->Eliminar(1);
    }
}

?>