<?php


class Storage
{
    /** store the data file
     * @var string
     */
    static public $storageFile = "../data/data.json";

    public function __construct($storageFile)
    {
        self::$storageFile = $storageFile;
    }

    /** return array of notes
     * @return mixed
     */
    static public function getAllNotes(){
        return file_get_contents(self::$storageFile);
    }

    /** function add note
     * @param string $note
     */
    public function addNotes($note){
        if(!empty($note)){
            $codedNotes = json_encode($note);
            $fileHandler = fopen(self::$storageFile, 'r+');
            file_put_contents(self::$storageFile, $codedNotes, FILE_APPEND);
            fclose($fileHandler);
        }
    }
}