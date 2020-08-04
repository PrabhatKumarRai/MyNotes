<?php include 'classes/model.class.php'; ?>

<?php include 'header.php'; ?>

<?php

    $list = new Model();
    $result = $list->noteAll();
    $rows = $result->num_rows;

?>


<h2 class="text-center">Notes List</h2>
<hr>
<div class="font-italic mb-2">Total Notes : <span class="font-weight-bold"><?= $rows; ?></span></div>

<?php
    $i = 0;     //For Notes Numbering


    if($rows < 1){
        echo "No Notes Exists";
    }
    else{
        while($row = $result->fetch_assoc()){
?>

            <div id="note_<?= ++$i; ?>">
                <div class="d-flex justify-content-between flex-wrap">
                    <span class="text-danger font-weight-bold" id="note_no">Note No : <?= $i; ?></span>
                    <span class="text-secondary" id="note_date_<?= $i ?>"><?= $row['note_date'] ?></span>
                </div>
                <div class="note-card-jumbotron jumbotron p-2 d-flex justify-content-between">
                    <!-- Note Contents -->
                    <div id="note_content_<?= $i ?>"><?= $row['note_content'] ?></div>
                    <!-- Menu Option Section -->
                    <div class="note-option-container">
                        <div class="btn-group dropleft">
                            <a class="p-1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="images/notes_option.png" alt="note-options" class="notes-option-img">
                            </a>
                            <div class="dropdown-menu">
                                <!-- Dropdown menu links -->
                                <h6 class="dropdown-header  font-italic">Actions</h6>
                                <hr class="mt-1 mb-1">
                                <a class="dropdown-item" href="<?= ROOT_URL; ?>update.php?edit=<?= $row['note_id'] ?>" type="submit" name="edit">Edit</a>
                                <a class="dropdown-item" href="#" onclick="printPDF('<?= $row['note_date'] ?>','note_content_<?= $i ?>')">Print / Pdf</a>
                                <a class="dropdown-item text-danger" href="<?= ROOT_URL; ?>includes/delete.inc.php?delete=<?= $row['note_id']; ?>" type="submit" name="delete">Delete</a>
                                <h6 class="dropdown-header  font-italic mt-2">Social</h6>
                                <hr class="mt-1 mb-1">

                                <!-- Whatsapp -->
                                <a class="dropdown-item" href="#" id="whatsapp_<?= $i ?>" onclick="whatsapp('whatsapp_<?= $i ?>', 'note_content_<?= $i ?>', 'note_date_<?= $i ?>')">Whatsapp</a>
                                <!-- Email -->
                                <a class="dropdown-item" href="#" id="mail_<?= $i ?>" onclick="mail('mail_<?= $i ?>', 'note_content_<?= $i ?>', 'note_date_<?= $i ?>')">Email</a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php

        }

    }
?>


<?php include 'footer.php'; ?>
