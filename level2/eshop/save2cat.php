<?php
	// подключение библиотек
	require "eshop_db.inc.php";
	require "eshop_lib.inc.php";
//отримання та фільтрація з форми
$author = clearData($_POST["author"]);
$title = clearData($_POST["title"]);
$pubyear = clearData($_POST["pubyear"],"i");
$price=$_POST["price"]*1;
//echo "test";
//save($author,$title,$pubyear,$price);
save($author,$title,$pubyear,$price,$connection);
header("Location: add2cat.php");

?>