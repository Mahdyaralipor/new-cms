<?php
if(isset($_POST['btn'])){
    try{
        $email   = $_POST['email'];

        $query = 'INSERT INTO `forgetha` (`email`) VALUES (?)';
        $result = connection()->prepare($query);
        $result->bindValue(1,$email);
        if($result->execute()){}
    }
    catch(Exception $e){
        die($e->getMessage());
    }
}