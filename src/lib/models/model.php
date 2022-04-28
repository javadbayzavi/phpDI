<?php
namespace App\lib\models;


//TODO: this class must implement an abstract form of data provider
abstract class model
{
    public string $endPoint = "";
    public string $command="";
    protected $connection;
    protected const server = "127.0.0.1";
    protected const dbName = "employeesdb";
    protected const username = "root";
    protected const password = "javad6364";

    public function __construct()
    {
        try {
            $this->connection = new \PDO($this->getPDOConnectionString(),self::username,self::password);
        } catch (\Throwable $th) {
            throw $th;
        }

    }
    protected function getPDOConnectionString():string
    {
        
        return "mysql:host=" . self::server . ";dbname=" . self::dbName;
    }
}
?>