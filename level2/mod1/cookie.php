<?php
$count=$_COOKIE['count'];
$date1=$_COOKIE['date'];
$date2=date("d-m-Y H:i:s");
if(!isset($_COOKIE['count']))$count=1;
elseif(isset($_COOKIE['count']))$count++;
setcookie('count',"$count",0x7FFFFFFF);
setcookie('date',"$date2",time()+3600);
//if(isset($_COOKIE['count']))
echo $count."<br>";
echo $date1."<br>";


$a=array(
        "One"=>1,
        2=>"two",
        3=>true
);
$str=serialize($a);
echo $str;
$arr=unserialize($str);

/*
ЗАДАНИЕ 1
- Инициализируйте переменную для подсчета количества посещений
- Если соответствующие данные передавались через куки
  сохраняйте их в эту переменную
- Нарастите счетчик посещений
- Инициализируйте переменную для хранения значения последнего посещения страницы
- Если соответствующие данные передавались из куки, отфильтруйте их и сохраните в эту переменную
- Установите соответствующие куки
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Последний визит</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>

<h1>Последний визит</h1>

<?php
/*
ЗАДАНИЕ 2
- Выводите информацию о количестве посещений и дате последнего посещения
*/
?>

</body>
</html>