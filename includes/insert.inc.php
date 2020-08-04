<?php

include 'config.inc.php';


if(isset($_POST['submit'])){

    $content = $_POST['content'];

    if(empty($content)){
        header("Location: ../index.php?message=contentEmpty&class=danger");
    }
    else{
        
        include '../classes/model.class.php';
        $insert = new Model();
        $result = $insert->noteInsert($content);
        if($result !== 1){
            header("Location: ../list.php?message=SQL Error&class=danger");
        }
        else{
            header("Location: ../list.php?message=Note Created&class=success");
        }

    }

}