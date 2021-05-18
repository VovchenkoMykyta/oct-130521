<?php


class Page
{
    public $templateFile;
    public $pageFile;

    public function __construct($pageFile,$templateFile = 'html/main_template.php')
    {
        $this->pageFile = $pageFile;
        $this->templateFile = $templateFile;
    }

    public function render($data = null){
        include_once $this->templateFile;
    }
}