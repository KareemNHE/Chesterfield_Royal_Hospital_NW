<?php
function videoSQL (){
    $db = new SQLITE3('C:\\Users\\Public\\data\\chesterfield.db');
    $sql = "INSERT INTO videos (videoName) VALUES (:videoName)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':videoName', $_POST['videoName'], SQLITE3_TEXT);

    


    //execute the sql statement
    $stmt->execute();

    //the logic
    if($stmt){
        $added = true;
    }

    return $added;
}
?>