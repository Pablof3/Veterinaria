<?php
class Database
{
    private $host = DB_HOST;
    private $port=DB_PORT;
    private $user = DB_USER;
    private $password = DB_PASSWORD;
    private $name_db = DB_NAME_BD;

    private $dbh;
    public $stmt;
    private $error;

    public function __construct() 
    {
        //configurar conexion
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->name_db.';port='.$this->port;

        $options = array(
            PDO::ATTR_PERSISTENT => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
         );
    
         //instancia pdo
        try{
            $this->dbh = new PDO($dsn, $this->user, $this->password, $options);
            $this->dbh->exec('set names utf8');
        }
        catch(PDOException $e){
            $this->error= $e->getMessage();
            echo $this->error;
        }
    }
    //prepara consulta
    public function query($sql)
    {
        $this->stmt =$this->dbh->prepare($sql) ;
    }
    //bind Param enlace consulta preparada con variable
    public function bParam($campo, $param)
    {
        $this->stmt->bindParam($campo, $param);
    }
//parametrisa consulta
    public function bind($param, $val, $type = null)
    {
        if (is_null($type)) 
        {
            switch (true) {
                case is_int($val):
                    $type=PDO::PARAM_INT;
                break;
                case is_bool($val):
                    $type=PDO::PARAM_BOOL;
                break;
                case is_null($val):
                    $type=PDO::PARAM_NULL;
                break;
                
                default:
                    $type = PDO::PARAM_STR;
                break;
            }
        }
        $this->stmt->bindValue($param, $val, $type);
    }
//ejecuta consulta
    public function execute()
    {
        return $this->stmt->execute();
    }
//Obtener registros
    public function getRegistros()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
//Obtener Registro
    public function getRegistro()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    //cantidad de filas
    public function numRows()
    {
        return $this->stmt->rowCount();

    }
    
}

?>
