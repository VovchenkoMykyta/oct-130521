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
$page = new Page('html/all_notes_page.php', 'html/main_template.php');
$page->render();

