<?php
require_once("/fayez/includes/dbh.php");
abstract class Model
{
    protected $db;
    protected $conn;

    public function __construct()
    {
        $this->db = new Dbh();
        $this->conn = $this->db->getConn();
    }
    public function getConn()
    {
        return $this->conn;
    }

}


?>