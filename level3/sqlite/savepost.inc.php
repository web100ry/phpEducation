<?php

 $name=$gbook->clearData($_POST["name"]);
 $email=$gbook->clearData($_POST["email"]);
 $msg=$gbook->clearData($_POST["msg"]);

if(!empty($name) and !empty($email) and !empty($msg)){

    $res = $gbook->savePost($name,$email,$msg);
    if ($res)
        header("Location: gbook.php");
    else
        $errMsg = "Помилка додавання повідомлення!";

}else{
    $errMsg = "Заповніть всі поля форми!";
}

?>