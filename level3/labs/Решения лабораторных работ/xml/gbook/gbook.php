<?php
define("GBOOK","gbook.xml");
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$nameTxt = addslashes(stripslashes(trim(strip_tags($_POST['name']))));
	$emailTxt = stripslashes(trim(strip_tags($_POST['email'])));
	$msgTxt = addslashes(stripslashes(trim(strip_tags($_POST['msg']))));
	$ipTxt = $_SERVER["REMOTE_ADDR"];
	$dateTxt = date("d-m-Y H:i:s");

	$dom = new DOMDocument("1.0", "utf-8");
	if (file_exists(GBOOK)) {
		// Файл есть
		// Загрузка XML-документа в объект
		$dom->load(GBOOK);
		// Получение корневого элемента
		$users = $dom->documentElement;
	} else {
		// Файла нет
		// Создание корневого элемента
		$users = $dom->createElement("users");
		// Привязка к объекту
		$dom->appendChild($users);
	}
	// Создание новых XML-элементов
	$user = $dom->createElement("user");

	// Элемент name
	$name = $dom->createElement("name");
	// Текстовое содержимое узла
	$nametext = $dom->createTextNode($nameTxt);
	// Присоединение узлов
	$name->appendChild($nametext);
	$user->appendChild($name);

	// Элемент email
	$email = $dom->createElement("email");
	// Текстовое содержимое узла
	$emailtext = $dom->createTextNode($emailTxt);
	// Присоединение узлов
	$email->appendChild($emailtext);
	$user->appendChild($email);

	// Элемент msg
	$msg = $dom->createElement("msg");
	// Текстовое содержимое узла
	$msgtext = $dom->createTextNode($msgTxt);
	// Присоединение узлов
	$msg->appendChild($msgtext);
	$user->appendChild($msg);

	// Элемент ip
	$ip = $dom->createElement("ip");
	// Текстовое содержимое узла
	$iptext = $dom->createTextNode($ipTxt);
	// Присоединение узлов
	$ip->appendChild($iptext);
	$user->appendChild($ip);

	// Поле date
	$date = $dom->createElement("date");
	// Текстовое содержимое узла
	$datetext = $dom->createTextNode($dateTxt);
	// Присоединение узлов
	$date->appendChild($datetext);
	$user->appendChild($date);
	
	// Присоединение нового элемента к корневому
	$users->appendChild($user);

	// Сохранение файла
	$dom->save(GBOOK);
	header("Location: ".$_SERVER["PHP_SELF"]);
	exit;
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
if(file_exists(GBOOK)){
	$users = simplexml_load_file(GBOOK);
	$users = (array)$users; 
	$users = array_reverse($users['user']);
	echo "Записей в Гостевой книге: ".count($users)."</p>";
	foreach($users as $user){
		echo <<<LABEL
		<hr>
		<p>
			<b><a href="mailto:{$user->email}">{$user->name}</a></b> [{$user->ip}] @ {$user->date}
			<br />{$user->msg} 
		</p>
LABEL;
	}
}else{
	echo "<p>Записей в Гостевой книге: 0</p>";
}
?>

</body>
</html>