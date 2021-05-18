<?php
include_once "classes/Storage.php";
include_once "classes/Main.php";


class Page
{
    public $templateFile;
    public $pageFile;

    public function __construct($pageFile,$templateFile)
    {
        $this->pageFile = $pageFile;
        $this->templateFile = $templateFile;
    }

    public function render($data){
        include_once $this->templateFile;
    }
}