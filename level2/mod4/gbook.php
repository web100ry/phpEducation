<?php

define("DB_HOST", "localhost");
define("DB_LOGIN", "root");
define("DB_PASSWORD", "qwerty");

$connection = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) or die(mysqli_error($connection));
mysqli_select_db($connection,'gbook') or die(mysqli_error($connection));
$sql = "SELECT * FROM msgs ";
$result=mysqli_query ($connection, $sql) or die(mysqli_error($connection));

/* ЗАДАНИЕ 1
- Подключитесь к серверу mySQL
- Выберите активную Базу Данных 'gbook'
- Проверьте, была ли корректным образом отправлена форма
- Если она была отправлена: отфильтруйте полученные данные,
  сформируйте SQL-оператор на вставку данных в таблицу msgs
  и выполните его. После этого выполните перезапрос страницы, чтобы избавиться от информации, переданной через форму
*/

/*
ЗАДАНИЕ 3
- Проверьте, был ли запрос методом GET на удаление записи
- Если он был: отфильтруйте полученные данные,
  сформируйте SQL-оператор на удаление записи и выполните его.
  После этого выполните перезапрос страницы, чтобы избавиться от информации, переданной методом GET
*/

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
    echo "<a href=\"mailto:".$row['email']."\">".$row['name']."</a><br>";
    echo "<br>".$row['msg']."</br>";
    echo "<br> <a href=\"".$_SERVER['PHP_SELF']."?d=".$row['id']."\">DELETE</a>";
    echo "<br>------------------------------------------------<br>";
}
/*
ЗАДАНИЕ 2
- Сформируйте SQL-оператор на выборку всех данных из таблицы
  msgs в обратном порядке и выполните его. Результат выборки
  сохраните в переменной.
- Закройте соединение с БД
- Получите количество рядов результата выборки и выведите его на экран
- В цикле получите очередной ряд результата выборки в виде ассоциативного массива.
  Таким образом, используя этот цикл, выведите на экран все сообщения, а также информацию
  об авторе каждого сообщения. После каджого сообщения сформируйте ссылку для удаления этой
  записи. Информацию об идентификаторе удаляемого сообщения передавайте методом GET.
*/

mysqli_close($connection);
?>

</body>
</html>