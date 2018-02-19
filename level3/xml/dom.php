<?php
$dom= new DOMDocument("1.0","utf-8");
$dom->load("catalog.xml");
$root=$dom->documentElement;


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
/*
echo $root->nodeType;
echo "<br>";
$children = $root->childNodes;
foreach ($children as $book){
    echo $book->textContent."<br>";

}
*/
foreach ($root->childNodes as $book) {
    if ($book->nodeType == 1) {
        echo "<tr>";
        foreach ($book->childNodes as $item) {
            if ($item->nodeType == 1) {
                echo "<td>";
                echo $item->textContent;
                echo "</td>";
            }
        }
        echo "</tr>";

    }
}

?>
	</table>
</body>
</html>





