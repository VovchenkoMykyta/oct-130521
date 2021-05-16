<?php
include_once 'Storage.php';


class Main
{
    static function init()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && empty($_GET['id'])) {
            Storage::getAllNotes();
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $file = fopen(Storage::$storageFile, 'r+');
            file_put_contents(Storage::$storageFile, $_POST['note']);
            fclose($file);
            header("Location: index.php");
        } elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET['id'])){

        }
    }
}