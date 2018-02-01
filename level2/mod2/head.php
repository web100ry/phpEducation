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
// Новинка версії РНР 7 вказання типу повернення даних
function qw(): bool {
    return 222;
}
echo qw();

?>

<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
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
/*
 * спроба вставити данні в Гугл таблицю
        $ch = curl_init();
        $url = 'https://script.google.com/macros/s/AKfycbyK_KPeMiXTH88M_ZTdQ9_Lb_5ZE5azH7orpDkmVk8uI8ONG-v1/exec?';
        $url .= http_build_query(['p1' => $name, 'p2' => $age]);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        if (curl_exec($ch)) {
            echo 'good<br/>';
            curl_close($ch);  // закрываем сеанс
        }
        return true;

*/

    }
    else {
        print "<h3>Заполните все поля!</h3>";
    }
}
?>
