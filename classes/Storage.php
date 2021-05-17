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
    public function getAllNotes()
    {
        return file_get_contents($this->storageFile);
    }

    /** function add note
     * @param string $note
     */
    public function addNotes($note)
    {
        $file = fopen($this->storageFile, 'a+');
        fwrite($file, $note.",\r\n");
        fclose($file);
    }
}