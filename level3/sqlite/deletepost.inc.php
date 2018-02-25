<?php

$id=abs((int)$_GET["d"]); //приведення до цілого числа
if ($id){
    $gbook->deletePost($id);
    header("Location: gbook.php");//перезапрос страницы, чтобы избавиться от информации, переданной через адресную строку
}else{
    $errMsg = "Хакер? ;)";
}
?>