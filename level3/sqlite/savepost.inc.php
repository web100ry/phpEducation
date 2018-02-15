<?php

 $name=$gbook->clearData($_POST["name"]);
 $email=$gbook->clearData($_POST["email"]);
 $msg=$gbook->clearData($_POST["msg"]);

if(!empty($name) and !empty($email) and !empty($msg)){

    $gbook->savePost($name,$email,$msg);
    header("Location: gbook.php");

}else{
    $errMsg = "Заповніть всі поля форми!";
}

?>