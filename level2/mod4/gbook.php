<?php

define("DB_HOST", "localhost");
define("DB_LOGIN", "root");
define("DB_PASSWORD", "qwerty");

$connection = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) or die(mysqli_error($connection));
mysqli_select_db($connection,'gbook') or die(mysqli_error($connection));
$sql = "SELECT * FROM msgs ORDER BY id DESC ";
$result=mysqli_query ($connection, $sql) or die(mysqli_error($connection));


function clearData($data,$type="s"){
    switch ($type){
        case "s": $data=trim(strip_tags($data));break;
        case "i": $data=abs((int)$data);break;
    }
return $data;
}

if (isset($_GET["d"])){
$id=clearData($_GET["d"],"i");
    if($id>0){
        $sql = "DELETE FROM msgs WHERE id = $id";
        $result=mysqli_query ($connection, $sql) or die(mysqli_error($connection));
        header("Location: gbook.php");
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $n=clearData($_POST['name']);
    $e=clearData($_POST['email']);
    $t=clearData($_POST['msg']);
    if ($n and $e){
        $sql = "INSERT INTO msgs(name, email, msg) VALUES ('$n','$e','$t')";
        $result=mysqli_query ($connection, $sql) or die(mysqli_error($connection));
    header("Location: gbook.php");
exit;
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Гостевая книга</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>

<h1>Гостевая книга</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

Ваше имя:<br />
<input type="text" name="name" /><br />
Ваш E-mail:<br />
<input type="text" name="email" /><br />
Сообщение:<br />
<textarea name="msg" cols="50" rows="5"></textarea><br />
<br />
<input type="submit" value="Добавить!" />

</form>

<?php
echo "Всього записів в книзі: ".mysqli_num_rows($result)."<br>";
while ($row=mysqli_fetch_assoc($result)){
    $msg=nl2br($row['msg']);
    echo "<a href=\"mailto:".$row['email']."\">".$row['name']."</a><br>";
    echo "<br>".$msg."</br>";
    echo "<br> <a href=\"".$_SERVER['PHP_SELF']."?d=".$row['id']."\">DELETE</a>";
    echo "<br>------------------------------------------------<br>";
}

mysqli_close($connection);

?>

</body>
</html>