<?php


function onStart($sax, $tag, $att){ //функция-обработчик начальных тегов
if ($tag != "CATALOG" and $tag != "BOOK")
    echo "<td>";
if ($tag =="BOOK")
    echo "<tr>";
}
function onEnd ($sax, $tag){ // функция-обработчик закр. тегов
    if ($tag != "CATALOG" and $tag != "BOOK")
        echo "</td>";
    if ($tag =="BOOK")
        echo "</tr>";
}
function onText ($sax, $text){ //функцию-обработчик текстового содержимого
    echo $text;
}

$sax= xml_parser_create("utf-8");// парсер

xml_set_element_handler($sax,"onStart", "onEnd"); //функцию-обработчики начальных и конечных тего
xml_set_character_data_handler($sax,"onText"); //функцию-обработчик текстового содержимого

?>
<html>
	<head>
		<title>Каталог</title>
	</head>
	<body>
	<h1>Каталог книг</h1>
	<table border="1" width="100%">
		<tr>
			<th>Автор</th>
			<th>Название</th>
			<th>Год издания</th>
			<th>Цена, руб</th>
		</tr>
	<?php

	 xml_parse($sax, file_get_contents("catalog.xml"));	// Запустите парсер

	?>
	</table>
	</body>
</html>