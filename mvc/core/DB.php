<?php
class DB
{
    public $conn;
    protected $host = "localhost";
    protected $username = "root";
    protected $passworld = "";
    protected $DB_name = "mvc";
    function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->username, $this->passworld, $this->DB_name);
        if (!$this->conn) {
            die(" ket noi that bai");
        } else {
            mysqli_set_charset($this->conn, "utf8");
        }
    }
}
