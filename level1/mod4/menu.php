<?php
	/*
	ЗАДАНИЕ 1
	- Опишите функцию getMenu()
	- Задайте для функции первый аргумент $menu, в него будет передаваться массив, содержащий структуру меню
	- Задайте для функции второй аргумент $vertical со значением по умолчанию равным TRUE. Данный параметр указывает, каким образом будет отрисовано меню - вертикально или горизонтально
	
	ЗАДАНИЕ 2
	- Откройте файл mod3\menu.php
	- Скопируйте код, который создает массив $menu и вставьте скопированный код в данный документ
	- Скопируйте код, который отрисовывает меню
	- Вставьте скопированный код в тело функции getMenu()
	- Измените код таким образом, чтобы меню отрисовывалась в зависимости от входящих параметров $menu и $vertical
	*/
$menu1 = array(
    'Home' => 'index.php',
    'About' => 'about.php',
    'Contact' => 'contact.php'
);
$menu2 = array(
    'Home2' => 'index2.php',
    'About3' => 'about3.php',
    'Contact4' => 'contact4.php'
);
function getMenu($menu, $vert=true){
    echo "<ul style=\"list-style-type: none\">";
    $style='';
    if(!$vert)$style=' style="display:inline;margin-right:10px"';
foreach ($menu as $NameMenu => $LinkMenu) {
    echo "<li$style><a href=\"$LinkMenu\">$NameMenu</a></li>";
}
}
echo "</ul>";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Меню</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>Меню</h1>
	<?php
getMenu($menu1,false);

getMenu($menu2);

	/*
	ЗАДАНИЕ 3
	- Отрисуйте вертикальное меню вызывая функцию getMenu() с одним параметром
	*/
	/*
	ЗАДАНИЕ 4
	- Отрисуйте горизонтальное меню вызывая функцию getMenu() со вторым параметром равным FALSE
	*/
	?>
</body>
</html>
