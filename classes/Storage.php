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

    /** return notes
     * @return string|bool
     */
    public function getAllNotes()
    {
        return json_decode(file_get_contents($this->storageFile));
    }

    /** function add note
     * @param string $note
     */
    public function addNotes($note)
    {
        $notes = $this->getAllNotes();
        $notes[] = $note;
        $codedNote = json_encode($notes);
        file_put_contents($this->storageFile, $codedNote);
    }

    public function getOneNote($id){
        $notes[] = $this->getAllNotes();
        foreach ($notes as $id => $note){
            echo $note[$id];
        }
    }
}