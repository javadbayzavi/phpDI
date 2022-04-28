<?php
namespace App\controllers;
use App\lib\controllers\controller;
use App\pages\detailspage;

class details extends controller
{
    public function doTask(array $params)
    {
        //0.Extract the param filter
        //1. Fetch data from Data provider
        $employee = $this->dataProvider->getEmployee($params[0]["empid"]);
        //2. Inject a helper to render the view
        $this->viewPage = new detailspage($employee);         
    }
}

?>