<?php
// Создание структуры Базы Данных гостевой книги

define("DB_HOST", "localhost");
define("DB_LOGIN", "root");
define("DB_PASSWORD", "qwerty");
$connection = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) or die(mysqli_error());
//$sql = 'CREATE DATABASE gbook';
//mysqli_query($connection, $sql) or die(mysqli_error());

mysqli_select_db($connection,'gbook') or die(mysqli_error());

$sql = "
CREATE TABLE msgs (
	id int(11) NOT NULL auto_increment,
	name varchar(50) NOT NULL default '',
	email varchar(50) NOT NULL default '',
	msg TEXT,
	PRIMARY KEY (id)
)";
mysqli_query($connection, $sql) or die(mysqli_error());

mysqli_close();

print '<p>Структура базы данных успешно создана!</p>';
?>