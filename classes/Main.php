<?php
include_once 'Storage.php';


class Main
{
    /**
     * Initialization function
     */
    static function init()
    {
        $storage = new Storage("data/data.json");
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && empty($_GET['id'])) {
            $storage->getAllNotes();
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $storage->addNotes($_POST['note']);
            self::redirect();
//        }elseif (!is_int($_GET['id'])){
//            self::error404();
        } elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET['id'])){
            include_once "html/one_note_page.php";
        }
    }

    /** Show error 404
     * @return string
     */
    static function error404(){
        echo 'There is no page, fatality';
        exit();
    }

    /**
     * Redirect on /
     */
    static function redirect(){
        header('Location: index.php');
        exit();
    }
}