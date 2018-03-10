<?php
class User{
    public $id;
    public $email;
    public $name;

    function nameToUpper(){
        return strtoupper($this->name);
    }
}
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10.03.18
 * Time: 19:23
 */
$params=parse_ini_file("config.ini");


try{
    $dbh = new PDO($params['db.conn']);

    $sql="SELECT * FROM users";
    $stmt=$dbh->query($sql);
    $result=$stmt->fetchAll(PDO::FETCH_CLASS,'User');

    foreach ($result as $user){
        echo $user->nameToUpper()."<br>";
    }


/*
    $name="O'Brine";
    $name= $dbh->quote($name); // екранування спецсимволів

$sql="INSERT INTO users VALUES ($name,'65498321')";
$result = $dbh->exec($sql);
echo $result."<br>";//вивід кількість записів з якими були проведені дії
*/

$sql="SELECT * FROM users";
foreach ($dbh->query($sql) as $row){
    echo $row['name'].": ".$row['inn']."<br>";
}


$stmt=$dbh->query($sql);
    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    foreach ($result as $i=>$k){
        echo $i.": ".$k."<br>";
    }

    $result=$stmt->fetch(PDO::FETCH_OBJ);
        echo $result->name . "<br>";


}catch (PDOException $e){
    echo "Ups!".$e->getMessage();
}

?>