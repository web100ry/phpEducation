<?php
		/*
		ЗАДАНИЕ 1
		- Подключите файл lib.inc.php
		*/
		include "config.inc.php";
		include "lib.inc.php";
		require "data.inc.php";
		require "table.inc.php";
		?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Шаблон сайта</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>

<table width="100%" border="1">

<tr>
	<td colspan="2" align="center">
<?php include "top.inc.php";?>		<!-- Верхняя часть страницы -->
		<?php

		/*
		ЗАДАНИЕ 2
		- Подключите файл, содержащий код верхней части страницы (top.inc.php)
		*/
		?>
	</td>
</tr>

<tr>
	<td width="20%" valign="top">
<?php include "menu.inc.php";?>		<!-- Меню -->
		<?php
		/*
		ЗАДАНИЕ 3
		- Подключите файл, содержащий код меню (menu.inc.php)
		*/
		?>
	</td>
	<td>
		<?php
        include "table.php";
        ?>

        <!-- Область основного контента -->
		&nbsp;
	</td>
</tr>

<tr>
	<td colspan="2" align="center">
	<?php include "bottom.inc.php" ?>	<!-- Нижняя часть страницы -->
		<?php
		/*
		ЗАДАНИЕ 4
		- Подключите файл, содержащий код нижней части страницы (bottom.inc.php)
		*/
		?>
	</td>
</tr>
</table>

</body>
</html>