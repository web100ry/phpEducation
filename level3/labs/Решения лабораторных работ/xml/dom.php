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
	// Создание объекта DOM
	$dom = new DOMDocument();
	
	// Загрузка XML-документа в объект
	$dom->load("catalog.xml");
	
	// Получение корневого элемента
	$root = $dom->documentElement;
	
	foreach ($root->childNodes as $element) {
		// Проверка на тип элемента
		if ($element->nodeType == XML_ELEMENT_NODE) {
			echo "\t<tr>\n";
			foreach ($element->childNodes as $book) {
				if ($book->nodeType == XML_ELEMENT_NODE)	{
					echo "<td>", $book->textContent, "</td>";	
				}	
			}
			echo "\t</tr>\n";
		}
	}
?>
	</table>
</body>
</html>





