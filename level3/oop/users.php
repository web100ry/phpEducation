<?php
function __autoload($name)
{
 include $name.".class.php";
}

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
        checkObject($user1);
$user2->showTitle();
    echo $user2->showInfo();
        checkObject($user2);
$user3->showTitle();
    echo $user3->showInfo();
        checkObject($user3);
$user4 = clone $user1;
    $user4->name = "Vasya";
    $user4->showTitle();
    echo $user4->showInfo();
        checkObject($user4);
$user5->showTitle();
    echo $user5->showInfo();
        checkObject($user5);

echo "<hr>";
    echo "USERs: " . User::$countUser . "<br>";
    echo "ADMINs: " . superUser::$countAdmin . "<br>";

var_dump($user5->getInfo());

function checkObject($object)
{
 // is_a($object,"User"); // аналогічна функція визначення приналежність об'єкту до класу
    if ($object instanceof User){
        if ($object instanceof SuperUser)
            echo "User - ADMIN";
        else
            echo "User - USER";
    }else
        echo "NOT USER!!!";
}


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