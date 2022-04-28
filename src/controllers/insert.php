<?php
namespace App\controllers;
use App\lib\controllers\controller;
use App\lib\entities\employee;
use App\lib\core\address;

class insert extends controller
{
    public function doTask(array $params)
    {
        //0.Extract the param filter
        $emp = new employee($params[0]["empid"],$params[0]["name"],$params[0]["family"],$params[0]["phone"],$params[0]["email"],);
        //1. Fetch data from Data provider
        $res = $this->dataProvider->insertEmployee($emp);
        //2. Check the result of insert operation
        if($res)
        {
            $this->redirect(address::rootaddress);
        }
        else
        {
            //TODO: all the entered data must be preserved a returned back to client
            $this->redirect(address::rootaddress . "?task=create");
        }
    }
}

?>