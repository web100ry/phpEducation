<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Цикл while</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>Цикл while</h1>
	<?php
    $i=1;
    while ($i<50){
        echo'<br> '.$i."-";
    $i+=2;
        $k=0;
        while ($k<50){
            echo$k;
            $k+=2;
            if($k==48)
                break 2; //рівень виходу із циклів
        }

    }
	/*
	ЗАДАНИЕ 1
	- Используя цикл while выведите в столбик Нечётные числа от 1 до 50
	*/
	?>
</body>
</html>
