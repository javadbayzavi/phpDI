<?php
namespace App\lib\entities;

class employee
{
    public int $id;
    public string $name;
    public string $family;
    public string $email;
    public string $phone;
    
    public function __construct($i,$n,$f,$p,$e)
    {
            $this->id = $i;
            $this->name = $n;
            $this->family = $f;
            $this->email = $e;
            $this->phone = $p;
    }

    public function getFullName():string
    {
        return $this->name . " " . $this->family;
    }
}
?>