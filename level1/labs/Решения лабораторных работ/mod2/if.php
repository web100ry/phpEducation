<?php
	$age = 25;//Возраст
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Конструкции if-elseif-else</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>Конструкции if-elseif-else</h1>
	<?php
		if($age >= 18 and $age < 60){
			 echo "Вам ещё работать и работать";
		}elseif($age >= 1 and $age < 18){
			echo "Вам ещё рано работать";
		}elseif($age >= 60){
			echo "Вам пора на пенсию";
		}else{
			echo "Неизвестный возраст";
		}
	?>
</body>
</html>
