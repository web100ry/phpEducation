<?php
	
// Создать SOAP-клиента
$client = new SoapClient("http://localhost/php/level3/soap/stock.wsdl");
// Послать SOAP-запрос c получением результат
var_dump($client->__getFunctions());//перегляд що потрібно надати і що можна отримати
$result = $client->getStock("3");
echo $result;
?>