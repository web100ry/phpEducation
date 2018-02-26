<?php
// Описать функцию/метод Web-сервиса
    function getStock($num) {
        $stock = array (
            "1"=>100,
            "2"=>200,
            "3"=>300,
            "4"=>400,
            "5"=>500);
      if(!array_key_exists($num,$stock))
            return 0;
       else
            return $stock["$num"];
    }

   //echo getStock("3");
/*
// Отключить кэширование WSDL-документа
	ini_set("soap.wsdl_cache_enabled","0");

// Создать SOAP-сервер
$server = new SoapServer("http://php/level3/soap/stock.wsdl");

// Добавить функцию/класс к серверу
$server->addFunction("getStock");

// Запустить сервера
$server->handle();
*/

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("http://localhost/php/level3/soap/stock.wsdl");
$server->addFunction("getStock");
// Запуск сервера
$server->handle();


?>