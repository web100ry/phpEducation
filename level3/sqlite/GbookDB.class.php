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

    }

    function deletePost($id)
    {

    }


    function __destruct()
    {
        unset($this->_db);

    }


}



/*
ЗАДАНИЕ 3
- Опишите метод savePost. Смотрите описание метода в интерфейсе IGbookDB
- Получите данные о текущих дате и времени
- Получите данные об IP адресе пользователя	
- Сформируйте строку запроса на добавление новой записи
- Добавьте новую запись в таблицу msgs	
*/

/*
ЗАДАНИЕ 4
- Опишите метод getAll. Смотрите описание метода в интерфейсе IGbookDB
- Сформируйте строку запроса на выборку всех данных из таблицы msgs в обратном порядке
- Получите и верните результат запроса
*/

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