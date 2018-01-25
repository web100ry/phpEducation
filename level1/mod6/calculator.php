<?php
function clearData($data,$type='i'){
    switch ($type){
        case 'i': return $data*1; break;
        case 's': return trim(strip_tags($data)); break;
    }
}

/*
ЗАДАНИЕ 1
- Проверьте, была ли корректно отправлена форма
- Если она была отправлена, отфильтруйте полученные значения
- В зависимости от оператора производите различные математические действия
- В случае деления, проверьте, делитель на равенство с нулем (на ноль делить нельзя)
- Сохраните полученный результат вычисления в переменной
*/
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $num1=clearData($_POST['num1']);
    $operator=clearData($_POST['operator'],'s');
    $num2=clearData($_POST['num2']);
    $output="Результат: $num1 $operator $num2 = ";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Калькулятор</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>

<h1>Калькулятор</h1>

<?php
/*
ЗАДАНИЕ 2
- Если результат существует, выведите его
*/
?>

<form action="<?=$SERVER['REQUEST_URI'];?>" method="post">

Число 1:<br />
<input type="text" name="num1" /><br /><br />

Оператор:<br />
<input type="text" name="operator" /><br /><br />

Число 2:<br />
<input type="text" name="num2" /><br /><br />

<input type="submit" value="Считать!" />

</form>

<?php

    switch ($operator) {
        case "+":
            $output .= $num1 + $num2;
            break;
        case "-":
            $output .= $num1 - $num2;
            break;
        case "*":
            $output .= $num1 * $num2;
            break;
        case "/":
            if ($num2==0) $output="Ділення на 0 не можливе!";
            else $output .= $num1 / $num2;
            break;
        default: $output="Нема такого оператора $operator!";
    }
    echo $output;

?>

</body>
</html>