<?php
namespace App\lib\controllers;
use App\lib\models\model;
use App\lib\pages\page; 
use App\lib\models\employeeModel;
use App\lib\core\address;

abstract class controller
{
    protected employeeModel $dataProvider;
    protected page $viewPage;

    public function __construct()
    {
        //TODO: this data stor must be defined as a generic interface
        $this->dataProvider = new employeeModel();
    }

    public function run(... $params)
    {
        //Run the business part of the task
        $this->doTask($params);

        //Render the output based on the business action
        $this->viewPage->View();
    }
    
    public function redirect(string $target)
    {
        if($target == null)
        {
            header('Location: ' . address::rootaddress);
        }
        else
        {
            header('Location:' . $target);
        }
    }
    public abstract function doTask(array $paras);
}
?>