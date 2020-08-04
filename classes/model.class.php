<?php

include 'db.class.php';

class Model extends Db{

    //Notes Insert Operation Section
    public function noteInsert($content){
        $sql = "INSERT INTO notes (note_content) VALUES ('$content');";

        if($this->conn->query($sql)){
            return 1;
        }
        else{
            return 0;
        }
    }

    //Select All Notes Operation Section
    public function noteAll(){
        $sql = "SELECT * FROM notes ORDER BY note_date DESC;";

        if($result = $this->conn->query($sql)){
            return $result;
        }
        else{
            return 0;
        }
    }

    //Select Single Note Operation Section
    public function noteSingle($id){
        $sql = "SELECT * FROM notes WHERE note_id=$id;";

        if($result = $this->conn->query($sql)){
            return $result;
        }
        else{
            return 0;
        }
    }

    //Update Note Operation Section
    public function noteUpdate($id, $content){
        $sql = "UPDATE notes SET note_content='$content', note_date=now() WHERE note_id=$id";
        if($this->conn->query($sql)){
            return 1;
        }
        else{
            return 0;
        }
    }

    //Delete Note Operation Section
    public function noteDelete($id){
        $sql = "DELETE FROM notes WHERE note_id=$id;";

        if($this->conn->query($sql)){
            return 1;
        }
        else{
            return 0;
        }
    }

    //Search Note Operation Section
    public function noteSearch($search){
        $sql = "SELECT * FROM notes WHERE note_content LIKE '%$search%' or note_date LIKE '%$search%';";

        if($result = $this->conn->query($sql)){
            return $result;
        }
        else{
            return 0;
        }
    }

}
