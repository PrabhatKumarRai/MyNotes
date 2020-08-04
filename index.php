<?php

    include 'classes/model.class.php';

?>
<?php include 'header.php'; ?>

<?php
    $noteCount = new Model();
    $result = $noteCount->noteAll();
    $rows = $result->num_rows;
?>

<div class="dashboard-container container mt-2" style="min-height: calc(100vh - 144px);">
    <h2 class="text-center">DASHBOARD</h2>
    <hr>
    <div class="font-italic mb-2">Total Notes : <span class="font-weight-bold"><?= $rows; ?></span></div>

    <!-- Note List -->
    <div class="d-flex justify-content-around flex-wrap">
    <?php 

    $i = 0;     //For notes listing in dashboard

    $list = new Model();
    $result = $list->noteAll();

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $i++;  
        ?>
        <div class="dashboard-card mb-3">            
            <div class="d-flex justify-content-between flex-wrap">                         
                <span class="text-danger font-weight-bold">Note : <?= $i; ?></span>
                <span class="text-secondary"><?= $row['note_date'] ?></span>
            </div>
            <a href="list.php#note_<?= $i; ?>">
                <div class="dashboard-card-jumbotron jumbotron p-2 mb-0">
                    <div><?= $row['note_content'] ?></div>
                </div>
            </a>
        </div>
        <?php
        }

    }
    else{
        echo "No Notes Exists";
    }
    ?>
    </div>
</div>

<?php include 'footer.php'; ?>
