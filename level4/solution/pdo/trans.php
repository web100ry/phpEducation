<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11.03.18
 * Time: 22:19
 */
try{
    $params=parse_ini_file("config.ini");
    $db = new PDO($params['db.conn']);
    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->beginTransaction();
$sql = "CREATE TABLE goods(id INTEGER PRIMARY KEY, name TEXT, price INTEGER)";
$db->query($sql);
$db->exec("INSERT INTO goods (name, price) VALUES('One',100)");
$db->exec("INSERT INTO goods (name, price) VALUES('Two',200)");
$db->exec("INSERT INTO goods (name, price) VALUES('Three',300)");
$db->exec("INSERT INTO goods (name, price) VALUES('Four',400)");
$db->commit;
echo "Ok!";
}catch(PDOException $e){
$db->rollback();
$db->getMessage();
}
