<?php
session_start();
if($_SESSION['USER-LOGIN']=true){
    echo 'وارد هستید';
}
if(isset($_POST['btn'])){
    
    //databse connetion
    connection();

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql  = "SELECT * FROM `login` where username = '$username'";
    $result = $connection->query($sql);
}

    if($result->rowCount()){
        
        $result = $result->fetch();

        if($result['password'] == $password){
            $_SESSION['USER-LOGIN'] = true;
        }

    }