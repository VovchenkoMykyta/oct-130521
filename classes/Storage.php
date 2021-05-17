<?php


class Storage
{
    /** store the data file
     * @var string
     */
    public $storageFile;

    public function __construct($storageFile)
    {
        $this->storageFile = $storageFile;
    }

    /** return array of notes
     * @return mixed
     */
    public function getAllNotes(){
        $handler = fopen($this->storageFile, 'r');
        $notes = file_get_contents($this->storageFile);
        $decodeNote = json_decode($notes);
        fclose($handler);
        return $notes;
    }

    /** function add note
     * @param string $note
     */
    public function addNotes($note){
        if(!empty($note)){
            $codedNotes[] = json_encode($note);
            $fileHandler = fopen($this->storageFile, 'a+');
            file_put_contents($this->storageFile, $codedNotes, FILE_APPEND);
            fclose($fileHandler);
        }
    }
}