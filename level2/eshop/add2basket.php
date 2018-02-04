<?php
	// запуск сессии
	session_start();
	// подключение библиотек
	require "eshop_db.inc.php";
	require "eshop_lib.inc.php";
	$c=session_id();
	$id=clearData($_GET["id"],"i");
	$q=1;
	$dt=time();;
	add2basked($c,$id,$q,$dt,$connection);
	header("Location:catalog.php");

?>