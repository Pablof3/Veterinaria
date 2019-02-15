<?php
class mModelo
{
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function prueba()
    {
        $this->db->query("SELECT * FROM Cargo;");
        return $this->db->getRegistros();
    }
}

?>