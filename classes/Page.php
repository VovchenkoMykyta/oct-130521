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
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && empty($_GET['id'])) {
            include_once "html/all_notes_page.php";
        } elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET['id']) && preg_match('/^\d+$/', $_GET['id'])){
            include_once "html/one_note_page.php";
        }
    }
}