<?php
include "IGbookDB.class.php";

class GbookDB implements IGbookDB
{
    const DB_NAME = "gbook.db";
    protected $_db;

    function clearData($data){
        $data= stripcslashes($data);
        $data= strip_tags($data);
        $data= trim($data);
        $data= SQLite3::escapeString($data);
        return $data;
    }


    function __construct()
    {
        if (!file_exists(self::DB_NAME)) {
            $this->_db = new SQLite3(self::DB_NAME);
            $sql = "CREATE TABLE msgs(
                    id INTEGER PRIMARY KEY,
                    name TEXT,
                    email TEXT,
                    msg TEXT,
                    dt INTEGER,
                    ip TEXT
                    )";
            $this->_db->query($sql);
        }else{

            $this->_db = new SQLite3(self::DB_NAME);
        }

    }

    function savePost($name, $email, $msg)
    {
        $ip=$_SERVER["REMOTE_ADDR"];
        $dt = time();
        $sql="INSERT INTO msgs(
              name,
              email,
              msg,
              ip,
              dt)
              VALUES (
              '$name',
              '$email',
              '$msg',
              '$ip',
              $dt)";
        $this->_db->exec($sql);
      //  $this->_db->query($sql);
    }

    function getAll()
    {
        $sql="SELECT * FROM msgs ORDER BY id DESC";
        $result=$this->_db->query($sql);
        $data= array();
        while ($res= $result->fetchArray(SQLITE3_ASSOC)) {
            array_push($data, $res);
        }
    return $data;
    }

    function deletePost($id)
    {
$sql = "DELETE FROM msgs WHERE id = $id";
 if(!$this->_db->query($sql)) echo "Помилка видалення! ";
    }



    function __destruct()
    {
        unset($this->_db);

    }


}


/*
ЗАДАНИЕ 5
- Опишите метод deletePost. Смотрите описание метода в интерфейсе IGbookDB
- Сформируйте строку запроса на удаление новой записи
- Удалите запись из таблицы msgs	
*/

/*
ЗАДАНИЕ 6 (Если останется время)
- Опишите в конструкторе, а также в методах getAll, savePost и deletePost блок try-catch
- Создайте исключения на ошибки при выполнении SQL-запросов	
*/
?>