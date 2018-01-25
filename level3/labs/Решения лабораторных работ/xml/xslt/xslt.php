<?php
	//Создание объекта XML
	$xmlDoc = new DOMDocument();
	//Загрузка XML документа
	$xmlDoc->load("catalog.xml");
	//Создание объекта XSL
	$xslDoc = new DOMDocument();
	//Загрузка XSL документа
	$xslDoc->load("catalog.xsl");
	//Создание XSLT процессора
	$proc = new XSLTProcessor();
	//Загрузка XSL объекта
	$proc->importStylesheet($xslDoc);
	//Парсинг
	echo $proc->transformToXML($xmlDoc);
?>