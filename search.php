<?php

    
    if(isset($_POST['submit'])){
        $search = $_POST['search'];
        
        include 'classes/model.class.php';

        $searchobj = new Model();
        $result = $searchobj->noteSearch($search);

        $tot_result = $result->num_rows;
        $i = 0;

?>

        <?php include 'header.php'; ?>

        <h2 class="text-center">Search Results</h2>
        <hr>
        <p>Total Results Found : <span class="font-weight-bold"> <?= $tot_result; ?> </span></p>

<?php

     if($tot_result > 0){        

        while($row = $result->fetch_assoc()){
            $i++;
?>
        <a href="detail.php?id=<?= $row['note_id']; ?>" class="text-decoration-none text-dark">
        <div id="note_<?= $i; ?>">
            <div class="d-flex justify-content-between flex-wrap">
                <span class="text-danger font-weight-bold">Result : <?= $i; ?></span>
                <span class="text-secondary"><?= $row['note_date'] ?></span>
            </div>
            <div class="note-card-jumbotron jumbotron p-2 d-flex justify-content-between">
                <div><?= $row['note_content'] ?></div>
            </div>
        </div>
        </a>

<?php
        }
     }

    }
    else{
        header("Location: index.php");
    }

?>


<?php include 'footer.php'; ?>