<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Цикл for</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>Цикл for</h1>


	<?php
    $str='Hello!';
 //   $len=strlen($str);

for ($i=0,  $len=strlen($str); $i<=($len-1);$i+=1){
    echo $str[$i]."<br>";
}


    /*
	ЗАДАНИЕ 1
	- Используя цикл for выведите в столбик Нечётные числа от 1 до 50
	*/
	?>
</body>
</html>
