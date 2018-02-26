<?php
	// Создание SOAP-клиента
	$client = new SoapClient("http://localhost/php/level3/demo/soap/CurrencyExchangeService.wsdl");
	
	// Посылка SOAP-запроса c получением результат
	$result = $client->getRate("us", "russia");
	echo "Текущий курс: ", $result;
?>