<?php
include_once 'Storage.php';


class Main
{
    /**
     * Inititialization function
     */
    static function init()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && empty($_GET['id'])) {
            Storage::getAllNotes();
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $file = fopen(Storage::$storageFile, 'r+');
            file_put_contents(Storage::$storageFile, $_POST['note']);
            fclose($file);
            header("Location: index.php");
        }elseif (!is_int($_GET['id'])){
            self::error404();
        } elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET['id'])){
            $newFile = fopen(Storage::$storageFile, 'r');
            file_get_contents(Storage::$storageFile, false,null,$_GET['id']);
            fclose($newFile);
        }
    }

    /** Show error 404
     * @return string
     */
    static function error404(){
        return 'There is no page, fatality';
    }

    static function redirect(){
        header('Location: ./');
        exit();
    }
}