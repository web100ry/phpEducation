<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 12.02.18
 * Time: 23:22
 */

/**
 * Class User
 */


class User extends AUser implements IsuperUser
{
    public $objNum=0;
    static $countAllUsers;
    const INFO_TITLE = "Карточка користувача";
    //властивості
    public $name;
    public $login;
    public $password;
    static $countUser = 0;

    // методи
    function __toString(){
       return "<p> Користувач ".$this->name." номер".$this->objNum."<br>";
    }

    function __get($name)
    {
        // Implement __get() method.
        return $this->user[$name];
    }
    function __set($name, $value)
    {
        // Implement __set() method.
        $this->user[$name]=$value;
    }


    function getInfo()
    {
        //  Implement getInfo() method.
        $arr = array();
        foreach ($this as $name => $item) {
            //print "$name=>$item <br>";
            $arr[$name] = $item;
        }
        return $arr;
    }

    function __call($name, $arguments)
    {
        // Implement __call() method.
        echo "Метода $name не існує!";

    }

    /**
     * @inheritdoc
     */
    public function showInfo()
    {

        echo "<p>User: " . $this->name . "<br>";
        echo "Login: " . $this->login . "<br>";
        echo "Pass: " . $this->password . "<br>";

    }

    /**
     * User constructor.
     *
     * @param string $name
     * @param string $login
     * @param string $password
     */
    function __construct($name = "", $login = "", $password = "")
    {

        ++self::$countUser;
        ++self::$countAllUsers;
        $this->objNum=self::$countAllUsers;

        try {

            if ($name == "")
                throw new nameExc("Введіть: ");
            $this->name = $name;
            if ($login == "")
                throw new logExc("Введіть: ");
            $this->login = $login;
            if ($password == "")
                throw new passExc("Введіть: ");
            $this->password = $password;


        } catch (nameExc $e) {
            echo $e->getMessage();
        } catch (logExc $e) {
            echo $e->getMessage();
        } catch (passExc $e) {
            echo $e->getMessage();
        }

        return true;

    }

    function __clone()
    {
        // Implement __clone() method.
        $this->name = "GUEST";
        $this->login = "guest";
        $this->password = "qwerty";
        ++self::$countUser;
        ++self::$countAllUsers;
        $this->objNum=self::$countAllUsers;

    }

    /**
     *демонстрація звернення до константи класу в методі
     */
    function showTitle()
    {
        echo "<p>" . self::INFO_TITLE . "<br>";
    }
}

