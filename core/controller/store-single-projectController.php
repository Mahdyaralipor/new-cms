<?php
if(isset($_POST['btn'])){
    try{
        $comment    = $_POST['comment'];   
        $project    = $_POST['project_id'];   


        $query = 'INSERT INTO `comment` (`comment`,`project_id`) VALUES (?,?); ';
        $result = connection()->prepare($query);
        $result->bindValue(1,$comment);
        $result->bindValue(2,$project);
        if($result->execute()){}
    }
    catch(Exception $e){
        die($e->getMessage());
    }
}
?>