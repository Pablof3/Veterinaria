<?php
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
        $notificacion->id_Notificacion=$_POST['Notificacion']['id_Notificacion'];
        $notificacion->id_Cliente=$_POST['Notificacion']['id_Cliente'];
        $notificacion->mensaje=$_POST['Notificacion']['mensaje'];
        $notificacion->fechaEnvio=$_POST['Notificacion']['fechaEnvio'];
        print_r($notificacion);
        print_r($this->mNotificacion->Insertar($notificacion));
    }
    public function Actualizar()
    {
        $notificacion=new Core\Notificacion;
        $notificacion->id_Notificacion=$_POST['Notificacion']['id_Notificacion'];
        $notificacion->id_Cliente=$_POST['Notificacion']['id_Cliente'];
        $notificacion->mensaje=$_POST['Notificacion']['mensaje'];
        $notificacion->fechaEnvio=$_POST['Notificacion']['fechaEnvio'];
        print_r($notificacion);
        $this->mNotificacion->Actualizar($notificacion);
    }
    public function Eliminar()
    {
        $this->mNotificacion->Eliminar(2);
    }
}

?>