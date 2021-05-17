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
Main::init();
$storage = new Storage("data/data.txt");
?>

<form method="post">
    <textarea name="note" placeholder="Enter note"></textarea>
    <input type="submit" name="submit">
</form>
<?php echo $storage->getAllNotes();?>

