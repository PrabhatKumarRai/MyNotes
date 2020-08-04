<?php include 'header.php'; ?>

<?php
    if(!isset($_GET['id'])){
        header("Location: " . ROOT_URL);
    }
?>

<h2 class="text-center">Your Desired Note</h2>
<hr>
<?php 
    
    $id = $_GET['id'];

    include 'classes/model.class.php';

    $detail = new Model();
    $result = $detail->noteSingle($id);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        ?>
        <div id="note_<?= $id; ?>">
            <div class="d-flex justify-content-between flex-wrap">
                <span class="text-danger font-weight-bold">Result</span>
                <span class="text-secondary" id="note_date_<?= $id; ?>"><?= $row['note_date'] ?></span>
            </div>
            <div class="note-card-jumbotron jumbotron p-2 d-flex justify-content-between">
                <!-- Note Content -->
                <div id="note_content_<?= $id; ?>"><?= $row['note_content'] ?></div>
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
                            <a class="dropdown-item" href="#" onclick="printPDF('<?= $row['note_date'] ?>','note_content_<?= $id; ?>')">Print / Pdf</a>
                            <a class="dropdown-item text-danger" href="<?= ROOT_URL; ?>includes/delete.inc.php?delete=<?= $row['note_id']; ?>" type="submit" name="delete">Delete</a>
                            <h6 class="dropdown-header  font-italic mt-2">Social</h6>
                            <hr class="mt-1 mb-1">
                            <!-- Whatsapp -->
                            <a class="dropdown-item" href="#" id="whatsapp_<?= $id; ?>" onclick="whatsapp('whatsapp_<?= $id; ?>', 'note_content_<?= $id; ?>', 'note_date_<?= $id; ?>')" target="_blank">Whatsapp</a>
                            <!-- Email -->
                            <a class="dropdown-item" href="#" id="mail_<?= $id; ?>" onclick="mail('mail_<?= $id; ?>', 'note_content_<?= $id; ?>', 'note_date_<?= $id; ?>')" target="_blank">Email</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php

    }
    else{
        echo "No Matches Found!!!";
    }
?>


<?php include 'footer.php'; ?>