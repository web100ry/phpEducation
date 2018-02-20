<?php
$str=<<<LABEL
<html>
<head>
<title>TEST</title>
</head>
<body>
<p>
This <a href="#">My</a> site
</p>
</body>
</html>
LABEL;
$sxml=simplexml_load_string($str);
echo $sxml->body[0]->p."<br>";
echo $sxml->body[0]->p->asXML(); // вивід всього вмісту тега
echo strip_tags($sxml->body[0]->p->asXML())."<br>"; // вивід всього вмісту тега без тегів ;)


$sxml=simplexml_load_file("catalog.xml");
echo "<pre>";
    var_dump($sxml->xpath("/catalog/book/title[@id>=4 and @id<11]"));
echo "</pre>";

//echo $sxml->book[0]->title;
//var_dump($sxml);
//$sxml->book[0]->title="XML and IE8";
//file_put_contents("catalog1.xml",$sxml->asXML());
$attr = $sxml->book[0]->author->attributes(); // вивід атрибутів елементу

echo var_dump($attr);
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

?>
	</table>
</body>
</html>