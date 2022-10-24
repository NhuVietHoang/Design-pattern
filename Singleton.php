<?php  
class Database
{
    private $instance = null;
    public $connection;
 
    private function __construct()
    {
        $host = '';
        $username = '';
        $password = '';
        $database = '';
        $this->connection = new mysqli($host, $username, $password, $database);
    }
 
    public static function getInstance()
    {
        if (static::$instance == null) {
            static::$instance = new Database();
        }
         
        return static::$instance;
    }
}
