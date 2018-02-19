<?php
define("USER_LOG","users.xml");
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $name = stripslashes(trim(strip_tags($_POST["name"])));
    $email = stripslashes(trim(strip_tags($_POST["email"])));
    $msg = stripslashes(trim(strip_tags($_POST["msg"])));
    $ip = $_SERVER["REMOTE_ADDR"];
    $dt = time();

    $dom = new DOMDocument("1.0", "utf-8");
    if (!file_exists(USER_LOG)) {
        $root= $dom->createElement("users");
        $dom->appendChild($root);
    } else {
        $dom->load(USER_LOG);
        $root = $dom->documentElement;
    }
    $n=$dom->createElement("name",$name);
    $e=$dom->createElement("email",$email);
    $m=$dom->createElement("msg",$msg);
    $i=$dom->createElement("ip",$ip);
    $d=$dom->createElement("dt",$dt);
    $user=$dom->createElement("user");

    $user->appendChild($n);
    $user->appendChild($e);
    $user->appendChild($m);
    $user->appendChild($i);
    $user->appendChild($d);
    $root->appendChild($user);
    $dom->save(USER_LOG);
    header("Location: gbook.php"); exit;
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
/*
ЗАДАНИЕ 4
- Создайте объект SimpleXML и загрузите в него XML-документ
- Выведите в браузер все сообщения, а также информацию
  об авторе каждого сообщения в произвольной форме
  в обратном порядке
*/
?>

</body>
</html>