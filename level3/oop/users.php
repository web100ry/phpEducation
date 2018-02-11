<?php

class nameExc extends Exception{
    function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $message .=" NAME";
        parent::__construct($message, $code, $previous);
    }
}

class logExc extends Exception{
    function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $message .=" LOGIN";

        parent::__construct($message, $code, $previous);
    }
}

class passExc extends Exception{
    function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $message .=" PASSWORD";
        parent::__construct($message, $code, $previous);
    }
}
class User{
    //властивості
public $name;
public $login;
public $password;

    // методи
    public function showInfo(){

    echo "<p>User: ".$this->name."<br>";
    echo "Login: ".$this->login."<br>";
    echo "Pass: ".$this->password."<br>";

    }

function __construct($name="",$login="",$password="")
{
    try{

        if ($name == "")
            throw new nameExc("Введіть: ");
    $this->name=$name;
        if ($login == "")
            throw new logExc("Введіть: ");
    $this->login=$login;
        if ($password == "")
            throw new passExc("Введіть: ");
    $this->password=$password;

}
catch (nameExc $e){echo $e->getMessage();}
catch (logExc $e){echo $e->getMessage();}
catch (passExc $e){echo $e->getMessage();}

}

function __clone()
{
    // Implement __clone() method.
   $this->name="GUEST";
   $this->login="guest";
   $this->password="qwerty";

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

    }
}
$user5= new superUser("ADMINISTRATOR", "admin", "SuPeRqwerty","SUPERadmin");

     //$user5->role="SUPERadmin";


$user1=new User("user1","user11");
/*
    $user1->name="USER1";
    $user1->login="user1";
    $user1->password="user11";
*/

$user2=new User("USER2","user2","user22");

/*
    $user2->name="USER2";
    $user2->login="user2";
    $user2->password="user22";
*/

$user3=new User("USER3","user3","user33");
/*
    $user3->name="USER3";
    $user3->login="user3";
    $user3->password="user33";
*/
echo $user1->showInfo();
echo $user2->showInfo();
echo $user3->showInfo();
$user4 = clone $user1;
$user4->name="Vasya";
echo $user4->showInfo();

echo $user5->showInfo();



 ""
	/*
	ЗАДАНИЕ 9
	- Создайте константу класса User INFO_TITLE
	- Присвойте константе INFO_TITLE строковое значение "Данные пользователя:"
	- Обратитесь к константе INFO_TITLE перед вызовами метода showInfo()
	- Запустите код и проверьте его работоспособность
	- Создайте метод showTitle() в классе User
	- Опишите метод showTitle(), чтобы он выводил в браузер значение константы INFO_TITLE
	- Обратитесь к метод showTitle() перед вызовами метода showInfo()
	*/
	/*
	ЗАДАНИЕ 10
	- Создайте абстрактный класс AUser
	- В абстрактном классе AUser объявите абстрактный метод showInfo()
	- Обновите класс User, унаследовав его от абстрактного класса AUser
	- Внесите в класс User необходимые изменения
	- Запустите код и проверьте его работоспособность
	*/
	/*
	ЗАДАНИЕ 11
	- Создайте интерфейс ISuperUser
	- В интерфейс ISuperUser объявите метод getInfo()
	- Опишите метод getInfo() в классе SuperUser
	- Метод getInfo() должен возвращать ассоциативный массив, в котором 
	  именами ячеек являются имена свойств объекта, а значениями ячеек - значения свойств объекта
	- Вызовите метод getInfo() для экземпляра класса SuperUser
	- В цикле выведите данные, полученные с помощью метода getInfo()
	*/
	/*
	ЗАДАНИЕ 12
	- Опишите в классах User и SuperUser статические свойства для подсчета количества созданных объектов
	- Присвойте этим свойствам начальные значения (0)
	- В конструкторах инкрементируйте значения данных свойств
	- После создания экземпляров классов User и SuperUser выведите в браузер количество тех и других объектов
	*/
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