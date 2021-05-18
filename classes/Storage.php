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
        return file_get_contents($this->storageFile);
    }

    /** function add note
     * @param string $note
     */
    public function addNotes($note)
    {
        $codedNote = "<p>".json_encode($note)."</p>";
        file_put_contents($this->storageFile, $codedNote, 8);
    }
}