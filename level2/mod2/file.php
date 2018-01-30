<?php
//define("MYFILE","file.txt");
define("MYFILE","data.html");

//$fileName="file.txt";
$fname=strip_tags($_POST["fname"]);
$lname=strip_tags($_POST["lname"]);

if ($fname and $lname){

$stroka= "$fname $lname\n";

    $fp = fopen(MYFILE, 'a') or die("Error");
    fwrite($fp, $stroka);
    fclose($fp);
 // echo  var_dump($fp);
header("Location: " . $_SERVER["PHP_SELF"]);
}


/*
ЗАДАНИЕ 1
- Установите константу для хранения имени файла
- Проверьте, отправлялась ли форма и корректно ли отправлены данные из формы
- В случае, если форма была отправлена, отфильтруйте полученные значения
- Сформируйте строку для записи с файл
- Откройте соединение с файлом и запишите в него сформированную строку
- Выполните перезапрос текущей страницы (чтобы избавиться от данных, отправленных методом POST)
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns:test="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Работа с файлами</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>

<h1>Заполните форму</h1>
<div>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      Имя:
    <input type="text" name="fname"/>
    <hr>
Фамилия: <input type="text" name="lname" /><hr>
<hr>
<input  type="submit" value="Отправить!" />
</form>


</div>
    <p>Тест Gita2</p>

<?php

$fp = fopen(MYFILE, 'r') or die("Error");
//echo fread($fp,filesize(MYFILE));
echo fgets($fp)."<br>"; // виводить строку
echo fgets($fp)."<br>";
echo fgetss($fp)."<br>";// прибирає теги із строки
echo fgetss($fp)."<br>";
echo fgetss($fp)."<br>";


fclose($fp);1
/*
 *
ЗАДАНИЕ 2
- Проверьте, существует ли файл с информацией о пользователях
- Если файл существует, получите все содержимое файла в виде массива строк
- В цикле выведите все строки данного файла с порядковым номером строки
- После этого выведите размер файла в байтах.
*/
?>

</body>
</html>