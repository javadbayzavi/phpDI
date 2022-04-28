<?php
namespace App\controllers;
use App\lib\controllers\controller;
use App\lib\entities\employee;
use App\lib\core\address;

class delete extends controller
{
    public function doTask(array $params)
    {
        $ids[] = ((int)$params[0]["empid"]);
        $res = $this->dataProvider->deleteEmployee($ids);
        //2. Check the result of delete operation
        if($res)
        {
            $this->redirect(address::rootaddress);
        }
        else
        {
            //TODO: It can be extended to inform user about the delete error
            $this->redirect(address::rootaddress . "?task=list&error=10");
        }
    }
}

?>