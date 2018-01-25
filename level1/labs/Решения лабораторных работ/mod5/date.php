<?php
	$now = time();
	$birthday = mktime(0,0,0,2,16,1968);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Использование функций даты и времени</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>Использование функций даты и времени</h1>
	<?php
		echo "До моего дня рождения осталось " . $birthday - $now . " секунд";
	?>
</body>
</html>
