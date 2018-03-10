<?php
<<<<<<< HEAD
=======

function foo2($sum){
    echo $sum;
}
//OOP
class StockService{
// Описать функцию/метод Web-сервиса
>>>>>>> 7c175e230893adab6925f8d472abc6bfae0d9327
    function getStock($num) {
        $stock = array (
            "1"=>100,
            "2"=>200,
            "3"=>300,
            "4"=>400,
            "5"=>500);
      if(!array_key_exists($num,$stock))
<<<<<<< HEAD
            return 0;
       else
            return $stock["$num"];
    }

   echo getStock(4);
	// Описать функцию/метод Web-сервиса
	
	// Отключить кэширование WSDL-документа
	
	// Создать SOAP-сервер
	
	// Добавить функцию/класс к серверу
	
	// Запустить сервера
	
=======


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

>>>>>>> 7c175e230893adab6925f8d472abc6bfae0d9327
?>