<?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Форма передавала информацию
	$name = strip_tags($_POST["name"]);
	$age = $_POST["age"] * 1;
	
	// Сохранение в cookie на сутки
	setcookie("userName", $name, time() + 24*60*60);
	setcookie("userAge", $age, time() + 24*60*60);
}
else {
	// Чтение куки
	$name = strip_tags($_COOKIE["userName"]);
	$age = $_COOKIE["userAge"] * 1;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Сохранение состояния формы</title>
</head>

<body>
<h1>Сохранение состояния формы</h1>
<form action="<?=$_SERVER["PHP_SELF"]?>" 
		method="post">
	Ваше имя:
	<input type="text" name="name" value="<?=$name?>"><br>
	Ваш возраст:
	<input type="text" name="age" value="<?=$age?>"><br>
	<input type="submit" value="Передать">
</form>
<?
if ($_SERVER["REQUEST_METHOD"] == "POST") {	
	if ($name and $age) {
		echo "<h1>Привет, $name</h1>";
		echo "<h3>Тебе $age лет</h3>";
	}
	else {
		print "<h3>Заполните все поля!</h3>";
	}
}
?>
</body>
</html>
