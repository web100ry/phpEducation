<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 10.03.18
 * Time: 19:23
 */
$params=parse_ini_file("config.ini");

foreach (PDO::getAvailableDrivers()as $driver){
    echo $driver."<br>";
}
try{
    $dbh = new PDO($params['db.conn']);

$sql="INSERT INTO users VALUES ('Piter2','654987987')";
$result = $dbh->exec($sql);
echo $result."<br>";//вивід кількість записів з якими були проведені дії

$sql="SELECT * FROM users";
foreach ($dbh->query($sql) as $row){
    echo $row['name'].": ".$row['inn']."<br>";
}

}catch (PDOException $e){
    echo "Ups!".$e->getMessage();
}

?>