<?php
namespace App\lib\pages;

abstract class page
{
    public string $pageName;
    protected array $viewparams;

    public function __construct(...$params)
    {
        $this->viewparams = $params;
    }

    public function View()
    {
        $this->renderView($this->viewparams);
    }
    
    public abstract function renderView(array $params);
}
?>