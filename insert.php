<?php include 'header.php'; ?>

<div class="container mt-2" style="min-height: calc(100vh - 144px);">
    <h2 class="text-center">Create Notes</h2>
    <hr class="mb-4">
    <form action="includes/insert.inc.php" method="POST">

        <textarea name="content" class="ckeditor"></textarea>
        <br>
        <button type="submit" name="submit" class="btn btn-primary pl-5 pr-5">Save</button>
    </form>
</div>

<?php include 'footer.php'; ?>
