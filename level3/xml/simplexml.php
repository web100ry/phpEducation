<?php
$sxml=simplexml_load_file("catalog.xml");
//echo $sxml->book[0]->title;
//var_dump($sxml);
//$sxml->book[0]->title="XML and IE8";
//file_put_contents("catalog1.xml",$sxml->asXML());

/*
	ЗАДАНИЕ 1x`x`
	- Создайте объект и загрузите в него документ
	*/
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

	foreach ($sxml->book as $item){
        ?>
	    <tr>
			<td><?=$item->author?></td>
			<td><?=$item->title?></td>
			<td><?=$item->pubyear?></td>
			<td><?=$item->price?></td>
		</tr>
    <?php
	}
	    /*
	ЗАДАНИЕ 2
	- Заполните таблицу необходимыми данными
	*/
?>
	</table>
</body>
</html>