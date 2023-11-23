<?php
if(isset($_POST['btn'])){
    try{
        $name    = $_POST['name'];   
        $subject = $_POST['subject'];
        $email   = $_POST['email'];
        $message = $_POST['message'];

        $query = 'INSERT INTO `contact-us` ( `name`,`subject`,`email`, `message`) VALUES (?, ?,?,?)';
        $result = connection()->prepare($query);
        $result->bindValue(1,$name);
        $result->bindValue(2,$subject);
        $result->bindValue(3,$email);
        $result->bindValue(4,$message);
        if($result->execute()){}
    }
    catch(Exception $e){
        die($e->getMessage());
    }
}
