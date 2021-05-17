<?php
    include_once '../classes/Page.php';
    include_once '../classes/Storage.php';
    $storage = new Storage("data/data.txt");
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Main</title>
    </head>
    <body>
        <form method="post">
            <textarea name="note" placeholder="Enter note"></textarea>
        </form>
    </body>
</html>