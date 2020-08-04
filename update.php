
<?php
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];

        include 'classes/model.class.php';
        include 'header.php';

        $edit = new Model();
        $result = $edit->noteSingle($id);
        $row = $result->fetch_assoc();

        $content = $row['note_content'];
?>

        <div class="container mt-2" style="min-height: calc(100vh - 144px);">
            <h2 class="text-center">Edit Notes</h2>
            <hr class="mb-4">
            <form action="includes/update.inc.php" method="POST">

                <input type="hidden" name="id" value="<?= $id; ?>">
                <textarea name="content" class="ckeditor"><?= $content; ?></textarea>
                <br>
                <button type="submit" name="submit" class="btn btn-primary pl-5 pr-5">Update</button>
            </form>
        </div>

<?php include 'footer.php'; ?>

<?php 
    }
    else{
        header("Location: list.php");
    }

?>