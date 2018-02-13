<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 12.02.18
 * Time: 23:39
 */
class superUser extends User
{
    public $role;
    static $countAdmin = 0;


    public function showInfo()
    {
        /*
        echo "<p>User: " . $this->name . "<br>";
        echo "Login: " . $this->login . "<br>";
        echo "Pass: " . $this->password . "<br>";
        */
        parent::showInfo();
        echo "Role: " . $this->role . "<br>";
    }

    function __construct($name, $login, $password, $role)
    {

        /*
         $this->name = $name;
         $this->login = $login;
         $this->password = $password;
        */
        parent::__construct($name, $login, $password);
        $this->role = $role;
        ++self::$countAdmin;
        --self::$countUser;
       // ++self::$countAllUsers;
        $this->objNum=self::$countAllUsers;


    }
}
