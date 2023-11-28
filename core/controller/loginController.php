<?php
if(isset($_POST['btn'])){

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql  = "SELECT * FROM `login` where username = '$username'";
    $result = connection()->query($sql);
}

    if($result->rowCount()){
        
        $result = $result->fetch();

        if($result['password'] == $password){
            $_SESSION['USER-LOGIN'] = true;
            $_SESSION['USER-DETAIL'] = $result;
   
        }
    }

  
    ?>
