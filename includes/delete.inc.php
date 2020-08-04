<?php

include 'config.inc.php';


if(isset($_GET['delete'])){

    $id = $_GET['delete'];

    include '../classes/model.class.php';

    $delete = new Model();
    $result = $delete->noteDelete($id);

    if($result !== 1){
        header("Location: ../list.php?message=SQL Error&class=danger");
    }
    else{
        header("Location: ../list.php?message=Note Deleted Successfully&class=success");
    }

}