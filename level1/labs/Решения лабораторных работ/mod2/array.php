<?php
$bmw = array(
	"model"=>"X5",
	"speed"=>120,
	"doors"=>5,
	"year"=>"2006");
$toyota = array(
	"model"=>"Carina",
	"speed"=>130,
	"doors"=>4,
	"year"=>"2007");
$opel = array(
	"model"=>"Corsa",
	"speed"=>140,
	"doors"=>5,
	"year"=>"2007");	

$cars = array();
$cars[] = $bmw;
$cars[] = $toyota;
$cars[] = $opel;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Массивы</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>Массивы</h1>
	<?php
	echo "<p>BMW" - ,$bmw["model"]," - ",$bmw["speed"]," - ",$bmw["doors"]," - ",$bmw["year"],"</p>";
	echo "<p>Toyota" - ,$toyota["model"]," - ",$toyota["speed"]," - ",$toyota["doors"]," - ",$toyota["year"],"</p>";
	echo "<p>Opel" - ,$opel["model"]," - ",$opel["speed"]," - ",$opel["doors"]," - ",$opel["year"],"</p>";
	?>
	<hr>
	<?php
		echo "<p>", $cars[0]["model"], " : ", $cars[0]["year"], "</p>";
		echo "<p>", $cars[1]["model"], " : ", $cars[1]["year"], "</p>";
		echo "<p>", $cars[2]["model"], " : ", $cars[2]["year"], "</p>";
	?>
</body>
</html>
