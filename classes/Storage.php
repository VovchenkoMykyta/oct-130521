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
        return json_decode(file_get_contents($this->storageFile));
    }

    /** function add note
     * @param string $note
     */
    public function addNotes($note)
    {
        $codedNote = json_encode($note)."</br>";
        file_put_contents($this->storageFile, $codedNote, 8);
//        $file = fopen($this->storageFile, 'a+');
//        fwrite($file, $note.";<br/>");
//        fclose($file);
    }
}