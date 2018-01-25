    <?php
	/*
	ЗАДАНИЕ 1
	- Опишите функцию getTable()
	- Задайте для функции три аргумента: $cols, $rows, $color

	ЗАДАНИЕ 2
	- Откройте файл mod3\table.php
	- Скопируйте код, который отрисовывает таблицу умножения
	- Вставьте скопированный код в тело функции getTable()
	- Измените код таким образом, чтобы таблица отрисовывалась в зависимости от входящих параметров $cols, $rows и $color
	*/
	/*
	ЗАДАНИЕ 4
	- Измените входящие параметры функции getTable() на параметры по умолчанию
	*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Таблица умножения</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body> 
	<h1>Таблица умножения</h1>
	<?php

    function getTable($cols,$rows,$color='red'){

        echo"<table align='center' border='1'>";
        var_dump($color,$cols);
        for($tr=1;$tr<=$rows;$tr++) {
            echo "\t<tr align=\"center\">\n";
            for ($td=1;$td<=$cols;$td++){
                if($tr==1||$td==1)
                    echo "\t\t<th style='background-color: $color'>".$tr*$td."</th>\n";
                else
                    echo "\t\t<td>".$tr*$td."</td>\n";
            }
            echo "\t</tr>\n";
        }
        echo "</table>";
    }

    getTable(10,10);
    $table='getTable';
    $table(15,15,'#ff0077');
    getTable(20,20,'#ff5577');

    /*
	ЗАДАНИЕ 3
	- Отрисуйте таблицу умножения вызывая функцию getTable() с различными параметрами
	*/
	/*
	ЗАДАНИЕ 5
	- Отрисуйте таблицу умножения вызывая функцию getTable() без параметров
	- Отрисуйте таблицу умножения вызывая функцию getTable() с одним параметром
	- Отрисуйте таблицу умножения вызывая функцию getTable() с двумя параметрами
	*/
	?>
</body>
</html>
