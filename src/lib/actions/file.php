<?php
namespace App\lib\actions;
abstract class file
{
    public string $fileName;

    public function __construct(string $file)
    {
        $this->fileName = $file;
    }
    public abstract function download();
    public abstract function upload();
}
?>