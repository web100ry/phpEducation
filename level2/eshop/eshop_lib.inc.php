<?php

function clearData($data,$type="s"){
    switch ($type){
        case "s": $data=trim(strip_tags($data));break; //mysqli_real_escape_string?
        case "sf": $data=trim(strip_tags($data));break;
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

	function resave($dt,$connection){
    $goods = myBasket($connection);
       // echo session_id();
       // echo $goods;
        foreach ($goods as $item){
        $sql = "INSERT INTO orders (
                  author,
                  title,
                  pubyear,
                  price,
                  customer,
                  quantity,
                  datetime) 
            VALUES (
                '{$item["author"]}',
                 '{$item["title"]}',
                '{$item["pubyear"]}',
                {$item["price"]},
                '{$item["customer"]}',
                {$item["quantity"]},
                $dt)" ;
    $result=mysqli_query ($connection, $sql) or die(mysqli_error($connection));

    $sql = "DELETE FROM basket WHERE customer='".session_id()."'";
    $result=mysqli_query ($connection, $sql) or die(mysqli_error($connection));

        }
    }

    function getOrders($connection){
	    if (!file_exists(ORDERS_LOG))
	        return false;
	    $allorders = array();
	    $orders = file(ORDERS_LOG);
	    foreach ($orders as $order){
	        list($n,$e,$p,$a,$c,$dt)= explode("|", $order);
        $orderinfo=array();
            $orderinfo["name"] = $n;
            $orderinfo["email"] = $e;
            $orderinfo["phone"] = $p;
            $orderinfo["address"] = $a;
           $orderinfo["customer"] = $c;
            $orderinfo["dt"] = $dt*1;

        $sql="SELECT * FROM orders
              WHERE customer = '$c' 
              AND datetime = ".$orderinfo["dt"];
            $result=mysqli_query ($connection, $sql) or die(mysqli_error($connection));

            $orderinfo["goods"] = db2Array($result);

        $allorders[] = $orderinfo;
	    }
        return $allorders;
    }


?>