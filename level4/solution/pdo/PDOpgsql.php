<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 10.03.18
 * Time: 19:23
 */


foreach (PDO::getAvailableDrivers()as $driver){
    echo $driver."<br>";
}
try{
    $dbh = new PDO('pgsql:dbname=myDB;host=localhost','postgres','opPG1103');
}catch (PDOException $e){
    echo "Ups!".$e->getMessage();
}

?>