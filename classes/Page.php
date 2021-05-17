<?php


class Page
{
    public $templateFile = "../html/main_template.php";
    public $pageFile;

    public function __construct($pageFile,$templateFile)
    {
        $this->pageFile = $pageFile;
        $this->templateFile = $templateFile;
    }

    public function render($data){
        include_once $this->pageFile;
    }
}