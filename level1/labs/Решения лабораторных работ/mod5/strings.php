<?php
	$login = "root";
	$password = "megaP@ssw0rd";
	$email = "ivan@petrov.ru";
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Использование функций обработки строк</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<?php
		echo ucfirst($login), '<br />';
		echo ucfirst($password), '<br />';
		// С помощью функции substr_count() проверяем
		// e-mail на наличие символа '@'
		if(substr_count($email, '@')){
			echo ucfirst($email), '<br />';
		}
	?>
</body>
</html>
