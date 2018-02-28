<?php
//	- Запустите сессию
session_start();
// - Создайте переменную result со значением "пустая строка"("")
$result="";
// - Проверьте, была ли отправлена форма
if(!$_SESSION['randStr']) echo "Включи відображення картинки!";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if ($_SESSION['randStr'] == $_POST['str']){
        echo "Правильно";
    }
    else echo "НЕ правильно!";
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>Регистрация</title>
</head>
<body>
<h1>Регистрация</h1>
<form action="" method="post">
	<div>
		<img src="noise-picture.php">
	</div>
	<div>
		<label>Введите строку</label>
		<input type="text" name="str" size="6">
	</div>
	<input type="submit" value="OK">
</form>
<?php 
	/*
	ЗАДАНИЕ 2
	- Выведите значение переменной result
	*/
?>
</body>
</html>
