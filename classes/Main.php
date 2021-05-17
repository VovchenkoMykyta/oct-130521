<?php
include_once 'Storage.php';


class Main
{
    /**
     * Initialization function
     */
    static function init()
    {
        $storage = new Storage("data/data.txt");
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && empty($_GET['id'])) {
            $storage->getAllNotes();
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $storage->addNotes($_POST['note']);
            self::redirect();
        }elseif (!is_int($_GET['id'])){
            self::error404();
        } elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET['id'])){
            $newFile = fopen($storage->storageFile, 'r+');
            file_get_contents($storage->storageFile, false,null,$_GET['id']);
            fclose($newFile);
        }
    }

    /** Show error 404
     * @return string
     */
    static function error404(){
        return 'There is no page, fatality';
    }

    /**
     * Redirect on /
     */
    static function redirect(){
        header('Location: index.php');
        exit();
    }
}