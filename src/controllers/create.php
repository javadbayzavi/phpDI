<?php
namespace App\controllers;
use App\lib\controllers\controller;
use App\pages\createpage;
use App\lib\entities\employee;

class create extends controller
{
    public function doTask(array $params)
    {
        //0.Extract the param filter
        //1. Fetch data from Data provider
        //$employee = $this->dataProvider->getEmployee($params[0]["empid"]);
        //2. Inject a helper to render the view
        $this->viewPage = new createpage(new employee(0,'','','',''));         
    }
}

?>