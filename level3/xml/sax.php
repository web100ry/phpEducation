<?php
$parcer= xml_parser_create(["utf-8"]);// парсер
function onStart($xml, $tag, $attr){ //функция-обработчик начальных тегов

}
function onEnd ($xml, $tag){ // функция-обработчик закр. тегов

}
function onTex ($xml, $tag){ //функцию-обработчик текстового содержимого

}
xml_set_element_handler($parcer,"onStart", "onEnd"); //функцию-обработчики начальных и конечных тего
xml_set_character_data_handler($parcer,"onText"); //функцию-обработчик текстового содержимого

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
    $file="xslt/catalog.xml";
    $strFile=file_get_contents("$file",FILE_USE_INCLUDE_PATH);

	xml_parce($parcer,"$strFile")	// Запустите парсер

	?>
	</table>
	</body>
</html>