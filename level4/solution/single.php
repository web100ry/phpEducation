<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 03.03.18
 * Time: 11:49

 * Приклад патерну Singleton ("Одиночка")

 */

/**
class Dbconn{
    const DB_NAME='new.db';
    private $_db;
    static private $_instance = null;
    private function __construct() //  закрили конструктор
    {
        $this->_db=new SQLite3(self::DB_NAME);
    }
    private function __clone(){} // закрили функцію від клонування

    static function getInstance(){
        if (self::$_instance==null){
            self::$_instance=new Dbconn();
        }
      return self::$_instance;
    }
}

//$db = new DBconn(); // видає помилку т.я закритий конструктор
$sql='SELECT bar FROM foo';
$db=Dbconn::getInstance();

//$db->query($sql); //??
 */
class Logger{
    const LOG_NAME='log.txt';

    static private $_instance = null;
    private function __construct(){} //  закрили конструктор
    private function __clone(){} // закрили функцію від клонування

    static function getInstance(){
        if (self::$_instance==null){
            self::$_instance=new Logger();
        }
        return self::$_instance;
    }
    public function Log($str){
        file_put_contents(self::LOG_NAME,$str,FILE_APPEND);
    }

}

$a = Logger::getInstance();

$a->Log('Test add str to file'.__LINE__."\n");

?>