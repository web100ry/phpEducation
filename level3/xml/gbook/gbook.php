<?php
define("USER_LOG", "users.xml");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = stripslashes(trim(strip_tags($_POST["name"])));
    $email = stripslashes(trim(strip_tags($_POST["email"])));
    $msg = stripslashes(trim(strip_tags($_POST["msg"])));
    $ip = $_SERVER["REMOTE_ADDR"];
    $dt = time();

    $dom = new DOMDocument("1.0", "utf-8");
    $dom->formatOutput = true;
    $dom->preserveWhiteSpace = false;


    if (!file_exists(USER_LOG)) {
        $root = $dom->createElement("users");
        $dom->appendChild($root);
    } else {
        $dom->load(USER_LOG);
        /*
         $dom->loadXML($str);
         $dom->loadHTML($str);
         $dom->loadHTMLFile($file);
         */

        $root = $dom->documentElement;
    }
    $n = $dom->createElement("name", $name);
    $e = $dom->createElement("email", $email);
    $m = $dom->createElement("msg", $msg);
    $i = $dom->createElement("ip", $ip);
    $d = $dom->createElement("dt", $dt);
    $user = $dom->createElement("user");

    $user->appendChild($n);
    $user->appendChild($e);
    $user->appendChild($m);
    $user->appendChild($i);
    $user->appendChild($d);
    $root->appendChild($user);
    $dom->save(USER_LOG);
    header("Location: gbook.php");
    exit;
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <title>Гостевая книга</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251"/>
</head>
<body>

<h1>Гостевая книга</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    Ваше имя:<br/>
    <input type="text" name="name"/><br/>
    Ваш E-mail:<br/>
    <input type="text" name="email"/><br/>
    Сообщение:<br/>
    <textarea name="msg" cols="50" rows="5"></textarea><br/>
    <br/>
    <input type="submit" value="Добавить!"/>

</form>

<?php
if (file_exists(USER_LOG)) {


    $sxml = simplexml_load_file(USER_LOG);
    $users = (array)$sxml;
    // var_dump($users);
    if (is_array($users["user"]))
        //$users=array_reverse($users);
        $users = array_reverse($users["user"]);
    else
        $users = array($users["user"]);
    foreach ($users as $item) {
        ?>
        <a href="mailto:<?= $item->email ?>"><?= $item->name ?></a><br>
        IP: <?= $item->ip ?><br>
        DATA PUB: <?= date("d-m-Y H:i:s", $item->dt * 1) ?><br>
        <?= nl2br($item->msg) ?>
        <br>
        <hr>
        <?php
    }
}
?>

</body>
</html>