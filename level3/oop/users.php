<?php

interface IsuperUser
{
    function getInfo();
}


abstract class AUser
{

    abstract function showInfo();
}


class nameExc extends Exception
{
    /**
     * nameExc constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $message .= " NAME";
        parent::__construct($message, $code, $previous);
    }
}

class logExc extends Exception
{
    function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $message .= " LOGIN";

        parent::__construct($message, $code, $previous);
    }
}

/**
 * Class passExc
 */
class passExc extends Exception
{
    function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $message .= " PASSWORD";
        parent::__construct($message, $code, $previous);
    }
}

/**
 * Class User
 */
class User extends AUser implements IsuperUser
{

    const INFO_TITLE = "Карточка користувача";
    //властивості
    public $name;
    public $login;
    public $password;
    static $countUser=0;

    // методи



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

    }

    /**
     *демонстрація звернення до константи класу в методі
     */
    function showTitle()
    {
        echo "<p>" . self::INFO_TITLE . "<br>";
    }
}


class superUser extends User
{
    public $role;

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

            ++self::$countUser;


    }
}

$user5 = new superUser("ADMINISTRATOR", "admin", "SuPeRqwerty", "SUPERadmin");

//$user5->role="SUPERadmin";


$user1 = new User("user1", "user11");
/*
    $user1->name="USER1";
    $user1->login="user1";
    $user1->password="user11";
*/

$user2 = new User("USER2", "user2", "user22");

/*
    $user2->name="USER2";
    $user2->login="user2";
    $user2->password="user22";
*/

$user3 = new User("USER3", "user3", "user33");
/*
    $user3->name="USER3";
    $user3->login="user3";
    $user3->password="user33";
*/
echo "<p> Загальна " . User::INFO_TITLE . "<br>";
$user1->showTitle();
echo $user1->showInfo();
$user2->showTitle();
echo $user2->showInfo();
$user3->showTitle();
echo $user3->showInfo();

$user4 = clone $user1;
$user4->name = "Vasya";
$user4->showTitle();
echo $user4->showInfo();
$user5->showTitle();
echo $user5->showInfo();
echo User::$countUser."<br>";
var_dump($user5->getInfo());


/*
ЗАДАНИЕ 13
- Опишите функцию checkObject(), которая принимает в качестве входящего параметра объект
- Проверьте Ваш объект, используя следующие условия:
  Если объект является экземпляром класса SuperUser, выводите сообщение,
    что данный пользователь обладает правами администратора
  Если объект является экземпляром класса User, выводите сообщение,
    что данный пользователь является обычным пользователем
  Если объект не является ни тем, ни другим, выводите сообщение,
    что данный пользователь - неизвестный пользователь
*/
/*
ЗАДАНИЕ 14
- В директории "oop" создайте файл "User.class.php"
- Перенесите описание класса User из файла "users.php" в файл "User.class.php"
- В директории "oop" создайте файл "SuperUser.class.php"
- Перенесите описание класса SuperUser из файла "users.php" в файл "SuperUser.class.php"
- Посторите те же действия для класса AUser и интерфейса ISuperUser
- В файле "users.php"(данный файл) опишите функцию __autoload(),
    которая автоматически присоединяет файлы с описанием классов к файлу "users.php"
*/
/*
ЗАДАНИЕ 15
- Создайте свойство objNum, которое будет хранить порядковый номер объекта.
  Подумайте, где лучше его создать?
- Внесите изменения в классе User (а может и в SuperUser?), которые будут присваивать свойству objNum,
  порядковый номер объекта.
  Подумайте, где и как лучше это сделать?
- В классе User (а может и в SuperUser?) опишите метод __toString()
- Данный метод должен возвращать строку в формате "Объект #objNum: name".
  Например: "Объект #3: Василий Пупкин"
- Попробуйте преобразовать один из созданных Вами объектов в строку
*/
?>