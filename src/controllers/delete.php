<?php
namespace App\controllers;
use App\lib\controllers\controller;
use App\lib\entities\employee;

class delete extends controller
{
    public function doTask(array $params)
    {
        $ids[] = ((int)$params[0]["empid"]);
        $res = $this->dataProvider->deleteEmployee($ids);
        //2. Check the result of delete operation
        if($res)
        {
            $this->redirect("/auto1/");
        }
        else
        {
            //TODO: It can be extended to inform user about the delete error
            $this->redirect("/auto1/?task=list&error=10");
        }
    }
}

?>