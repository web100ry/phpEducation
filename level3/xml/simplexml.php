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
$i=0;
	foreach ($sxml as $item){
        ?>
	    <tr>
			<td><?=$sxml->book[$i]->author?></td>
			<td><?=$sxml->book[$i]->title?></td>
			<td><?=$sxml->book[$i]->pubyear?></td>
			<td><?=$sxml->book[$i]->price?></td>
		</tr>
    <?php
        ++$i;
	}
	    /*
	ЗАДАНИЕ 2
	- Заполните таблицу необходимыми данными
	*/
?>
	</table>
</body>
</html>