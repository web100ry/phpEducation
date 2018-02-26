<?php

function foo2($sum){
    echo $sum;
}
//OOP
class StockService{
// Описать функцию/метод Web-сервиса
    function getStock($num) {
        $stock = array (
            "1"=>100,
            "2"=>200,
            "3"=>300,
            "4"=>400,
            "5"=>500);
      if(!array_key_exists($num,$stock))


         // return 0;
       throw new SoapFault ("Server","NO GOODS!");

      else
            return $stock["$num"];
    }
}

   //echo getStock("3");

// Отключить кэширование WSDL-документа
ini_set("soap.wsdl_cache_enabled", "0");
// Создать SOAP-сервер
$server = new SoapServer("http://localhost/php/level3/soap/stock.wsdl");
//OOP
$server->setClass("StockService");
    // Добавить функцию/класс к серверу
//    $arr=array("getStock","foo2");
//    $server->addFunction($arr);
// Запуск сервера
$server->handle();

?>