<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 25.01.18
 * Time: 18:46
 */
// header ("LOCATION: http://php/level2/mod1/cookie.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Форма передавала информацию
    $name = strip_tags($_POST["name"]);
    $age = $_POST["age"] * 1;

    // Сохранение в cookie на сутки
    setcookie("userName", $name, time() + 24 * 60 * 60);
    setcookie("userAge", $age, time() + 24 * 60 * 60);

    header("Location: " . $_SERVER["PHP_SELF"]);
   //exit;
}
else {
    // Чтение куки
    $name = strip_tags($_COOKIE["userName"]);
    $age = $_COOKIE["userAge"] * 1;

}


?>
<form action="<?=$_SERVER["PHP_SELF"]?>"
      method="post">
    Ваше имя:
    <input type="text" name="name" value="<?=$name?>"><br>
    Ваш возраст:
    <input type="text" name="age" value="<?=$age?>"><br>
    <input type="submit" value="Передать">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]) {
    if ($name and $age) {
        echo "<h1>Привет, $name</h1>";
        echo "<h3>Тебе $age лет</h3>";
    }
    else {
        print "<h3>Заполните все поля!</h3>";
    }
}
?>
