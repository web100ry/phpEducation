<?php
	// Сокетное соединение
$s=fsockopen("localhost",80,$e1,$e2,30);
// Создание сокета (host+порт)

	// Создание POST-строки
$str="name=Jhon&age=25";
	// Посылка HTTP-запроса
$out ="POST /php/level3/socket/dummy.php HTTP/1.1\r\n";
$out .="Host: localhost\r\n";
$out .="Content-Type: application/x-www-form-urlencoded\r\n";
$out .="Content-Length: ".strlen($str)."\r\n\r\n";
$out .=$str."\r\n\r\n";
fputs($s, $out);
	// Получение и вывод ответа
	while (!feof($s)){
	    echo fgets($s)."<br>";
    }
	// Закрытие соединения
	fclose($s);
?>