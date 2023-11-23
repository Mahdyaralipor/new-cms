<?php
if(isset($_POST['btn'])){
    try{
        $name    = $_POST['name'];   
        $subject = $_POST['theme'];
        $email   = $_POST['email'];
        $message = $_POST['message'];

        $query = 'INSERT INTO `contact-us` (`id`, `message`, `email`, `theme`) VALUES (NULL, ?, ?,?)';
        $result = connection()->prepare($query);
        $result->bindValue(1,$email);
        $result->bindValue(2,$message);
        if($result->execute()){}
    }
    catch(Exception $e){
        die($e->getMessage());
    }
}
