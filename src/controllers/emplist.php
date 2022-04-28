<?php
namespace App\controllers;
use App\lib\controllers\controller;
use App\pages\listpage;

class emplist extends controller
{
    public function doTask(array $params)
    {
        //0.Extract the param filter
        //1. Fetch data from Data provider
        $list = $this->dataProvider->getEmployees();
        //2. Inject a helper to render the view
        $this->viewPage = new listpage($list);         
    }
}

?>