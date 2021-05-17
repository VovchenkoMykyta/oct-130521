<?php
spl_autoload_register(function ($className){
   $classFilePath = 'classes' . DIRECTORY_SEPARATOR . $className.'.php';
   if(file_exists($classFilePath)){
       include_once $classFilePath;
       return true;
   } else {
       return false;
   }
});
$id = 0;

Main::init();
$storage = new Storage("data/data.txt");
var_dump($storage->getAllNotes());

var_dump($_POST);
?>

<form method="post">
    <textarea name="note" placeholder="Enter note"></textarea>
    <input type="hidden" name="id" value="<?= ++$id ?>">
    <input type="submit" name="submit">
</form>
<?php
$notes[] = $storage->getAllNotes();
var_dump($notes);
?>

