<?php
if(isset($_POST['btn'])){
    try{
        $username    = $_POST['username'];   
        $password = $_POST['password'];
        $email   = $_POST['email'];

        $query = 'INSERT INTO `signup` ( `username`,`password`,`email`) VALUES (?, ?,?)';
        $result = connection()->prepare($query);
        $result->bindValue(1,$username);
        $result->bindValue(2,$password);
        $result->bindValue(3,$email);
        if($result->execute()){}
    }
    catch(Exception $e){
        die($e->getMessage());
    }
}