<?php
    include_once 'index.php';
    $page = new Page('all_notes_page.php', 'main_template.php');
    $storage = new Storage('data/data.json');
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Main</title>
        <style>
            *{
                margin: 0;
                box-sizing: border-box;
            }
            header{
                min-height: 120px;
                text-align: center;
            }
            main{
                min-height: 700px;
                margin: 60px auto;
            }
            main div{
                width: 40%;
                margin-top: 60px;
                margin-left: 30%;
            }
            form{
                display: flex;
                flex-direction: column;
                margin: 5px auto;
                width: 10%;
            }
            footer{
                min-height: 30px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <header>
            Logo
        </header>
        <main>
            <form method="post">
                <textarea name="note" placeholder="Add note"></textarea>
                <input type="submit" value="Add note">
            </form>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'GET' && empty($_GET['id'])) {
                include_once $page->pageFile;
            } elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET['id']) && preg_match('/^\d+$/', $_GET['id'])){
                include_once "html/one_note_page.php";
            }
            ?>
        </main>
        <footer>
            oct-160521 &copy;
        </footer>
    </body>
</html>