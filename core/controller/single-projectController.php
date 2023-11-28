<?php
if(isset($_POST['btn'])){
    try{
        $comment    = $_POST['comment'];   

        $query = 'INSERT INTO `comment` (`comment`) VALUES (?); ';
        $result = connection()->prepare($query);
        $result->bindValue(1,$comment);
        if($result->execute()){}
    }
    catch(Exception $e){
        die($e->getMessage());
    }
}
?>