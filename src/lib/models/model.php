<?php
namespace App\lib\models;
use App\lib\core\dbcredentials;

//TODO: this class must implement an abstract form of data provider
abstract class model
{
    public string $endPoint = "";
    public string $command="";
    protected $connection;


    public function __construct()
    {
        try {
            $this->connection = new \PDO($this->getPDOConnectionString(),dbcredentials::username,dbcredentials::password);
        } catch (\Throwable $th) {
            throw $th;
        }

    }
    protected function getPDOConnectionString():string
    {
        
        return "mysql:host=" . dbcredentials::server . ";dbname=" . dbcredentials::dbName;
    }
}
?>