<div>
    <?php
    $notes = $storage->getAllNotes();
    foreach ( $notes as $note){
        echo "<p>".$note."</p>";
    }
    ?>
</div>
