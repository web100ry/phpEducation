<?php
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

   echo getStock(4);
	// Описать функцию/метод Web-сервиса
	
	// Отключить кэширование WSDL-документа
	
	// Создать SOAP-сервер
	
	// Добавить функцию/класс к серверу
	
	// Запустить сервера
	
?>