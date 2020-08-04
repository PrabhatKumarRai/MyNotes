<?php

include 'config.inc.php';


if(isset($_POST['submit'])){

    include '../classes/model.class.php';

    $id = $_POST['id'];
    $content = $_POST['content'];

    $update = new Model();
    $result = $update->noteUpdate($id, $content);

    if($result !== 1){
        header("Location: ../list.php?message=SQL ERROR&class=danger");
    }
    else{
        header("Location: ../list.php?message=Note Updated Successfully&class=success");
    }

}
