<?php
namespace App\lib\models;
use App\lib\entities\employee;
use App\lib\models\model;

class employeeModel extends model
{
    public function getEmployees():array
    {
        $this->command = "Select * from employee";
        $com = $this->connection->prepare($this->command);
        $com->execute();
        $list = array();
        while($item = $com->fetch(\PDO::FETCH_ASSOC))
        {
            extract($item);
            array_push($list, new employee($id,$name,$family,$phone,$email));
        }
        return $list;
    }
    public function getEmployee(int $id):employee
    {
        $this->command = "Select * from employee where id= :id";
        $com = $this->connection->prepare($this->command);
        $com->bindParam(":id", $id);
        $com->execute();
        $item = $com->fetch(\PDO::FETCH_ASSOC);
        extract($item);
        return new employee($id,$name,$family,$phone,$email);
    }

    public function updateEmployee(employee $employee):bool
    {
        try {
            $this->command = "Update employee SET name='{$employee->name}',family='{$employee->family}',phone='{$employee->phone}', email='{$employee->email}' where id= " . $employee->id;
            $com = $this->connection->prepare($this->command);
            $com->execute();
            return true;
        } catch (\Throwable $th) {
            throw $th;
            return false;
        }
    }

    public function insertEmployee(employee $employee):bool
    {
        try {
            $this->command = "Insert into employee (name,family,phone,email) VALUES('{$employee->name}','{$employee->family}','{$employee->phone}', '{$employee->email}')";
            $com = $this->connection->prepare($this->command);
            print_r($com);
            $com->execute();
            return true;
        } catch (\Throwable $th) {
            throw $th;
            return false;
        }
    }    
    
    public function deleteEmployee(array $ids):bool
    {
        try {
            print_r($ids);
            $idsstr = "(" . implode(',',$ids) . ")";
            $this->command = "Delete From employee  where id in " . $idsstr;
            $com = $this->connection->prepare($this->command);
            print_r($com);
            $com->execute();
            return true;
        } catch (\Throwable $th) {
            throw $th;
            return false;
        }
    }




}
?>