<?php
	// Создание парсера
	$xml = xml_parser_create("UTF-8"); // Windows-1251 не поддерживается
	
	// Назначение обработчиков начальных и конечных тегов
	xml_set_element_handler($xml, "start_tag_handler", "end_tag_handler");
	
	//  Назначение обработчика текстового содержимого
	xml_set_character_data_handler($xml, "character_handler");
	
	// Функция обработчик начальных тегов
	function start_tag_handler($xml, $tag, $attributes) {
		if ($tag != "CATALOG" and $tag != "BOOK") {
			echo "<td>";
		} elseif ($tag == "BOOK") {
			echo "<tr>";
		}		
	}
	
	// Функция обработчик закрывающих тегов
	function end_tag_handler($xml, $tag) {
		if ($tag != "CATALOG" and $tag != "BOOK") {
			echo "</td>";
		} elseif ($tag == "BOOK") {
			echo "</tr>";
		} 
	}
	
	// Функция обработчик текстового содержимого
	function character_handler($xml, $data) {
		echo $data;
	}
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
			<th>Год публикации</th>
			<th>Цена, руб</th>
		</tr>
	<?php
		// Начало парсинга
		xml_parse($xml, file_get_contents("catalog.xml"));
	?>
	</table>
	</body>
</html>