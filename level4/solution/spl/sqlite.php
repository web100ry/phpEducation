<?php
/**
test control version
 * Created by PhpStorm.
 * User: root
 * Date: 13.02.18
 * Time: 19:02
 */
// PROCEDURE ==========
echo "test";
//$db = sqlite_open("test1.db");
//phpinfo();
//sqlite_close($db);


// OOP ================
///$db1=new SQLiteDatabase("test.db");
//$sql="CREATE TABLE users (id INTEGER PRIMARY KEY, name TEXT, age INTEGER )";
//$result=$db1->arrayQuery($sql);
//$result=sqlite_array_query($db1,$sql);
//
//unset($db1);
?>

<?php
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('users.db');
    }
}
$db = new MyDB();
//$db->exec('CREATE TABLE foo (bar STRING)');
$db->exec("INSERT INTO users (name, inn) VALUES ('Vitalya', 654654321)");
$result = $db->query('SELECT name, inn FROM users');
var_dump($result->fetchArray());
//$clear=sqlite_escape_string($string);// фильтр тегів

?>
