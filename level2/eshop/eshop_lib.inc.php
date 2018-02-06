<?php

function clearData($data,$type="s"){
    switch ($type){
        case "s": $data=trim(strip_tags($data));break; //mysqli_real_escape_string
        case "i": $data=abs((int)$data);break;
    }
    return $data;
}


function save($author, $title, $pubyear, $price,  $connection){

$sql= "INSERT INTO catalog (author, title, pubyear, price) VALUES ('$author', '$title', $pubyear, $price)";
    $result=mysqli_query ($connection, $sql) or die(mysqli_error($connection));

}
function db2Array($data){
    $arr = array();
    while ($row = mysqli_fetch_assoc($data)){
        $arr[]=$row;
    }
return $arr;
}


function selectAll($connection){
    $sql ="SELECT * FROM catalog";
    $result=mysqli_query ($connection, $sql) or die(mysqli_error($connection));
return db2Array($result);
}

function add2basked($customer, $goodsid, $quantity, $datetime, $connection){
     $sql= "INSERT INTO basket (
                            customer, 
                            goodsid, 
                            quantity, 
                            datetime) 
                            VALUES (
                            '$customer', $goodsid, $quantity, $datetime)" ;
    $result=mysqli_query ($connection, $sql) or die(mysqli_error($connection));
}
	
	function myBasket($connection){
    $sql ="SELECT
                author, title, pubyear, price,
                basket.id, goodsid, customer,
                quantity
                FROM catalog, basket
                WHERE customer = '".session_id()."'
                AND catalog.id=basket.goodsid";
$result=mysqli_query ($connection, $sql) or die(mysqli_error($connection));
        return db2Array($result);
}

function basketDel($id,$connection){

$sql ="DELETE FROM basket WHERE id=$id";
$result=mysqli_query ($connection, $sql) or die(mysqli_error($connection));
}

	
	/*
	ЗАДАНИЕ 6
	- Опишите функцию resave() для пересохранения товаров из корзины (таблица basket) в заказы (таблица orders)
	- Функция должна принимать следующие значения:
			datetime – дата заказа 
	- Для получения содержимого корзины в этой функции воспользуйтесь функцией myBasket()
	- Опишите в функции resave() SQL-оператор, который будет вставлять данные из корзины в таблицу orders и выполните его
	- Опишите SQL-оператор для удаления данных о корзине текущего покупателя из таблицы basket
	*/
	
	/*
	ЗАДАНИЕ 7
	- Опишите функцию getOrders() для получения информации о заказах
	- Получите в виде массива $orders данные о пользователях из файла "orders.log"
	- Создайте массив $allorders для хранения информации обо всех заказах
	- В цикле foreach переберите все заказы
	- Внутри цикла foreach создайте ассоциативный массив $orderinfo для хранения информации о каждом конкретном заказе
	- Сохраните информацию о пользователе из массива $orders(name, email, phone, address, customer, date) в массиве $orderinfo
	- Опишите SQL-оператор для выборки из таблицы заказов всех товаров для конкретного покупателя
	- Получите весь результат этой выборки
	- Сохраните полученный в предыдущем пункте результат как значение
		ключа "goods" в массиве $orderinfo
	- Добавьте сформированный массив $orderinfo в виде значения очередного ключа массива $allorders
	- Функция getOrders() должна возвращать массив $allorders с информацией о всех покупателях
		и сделанных ими заказах
	*/

?>