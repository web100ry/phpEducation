<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {

    $name = trim(strip_tags($_POST['name']));// trim - видалення пробілів зліва і справа
    $age = abs((int)$_POST['age']); //позитивне ціле
}
?>
<table width="100%">
	<tr>
		<td align="center"><h3>Page 1</h3></td>

        <form action="" method="POST">
            <input type="text" name="name" value="<?=$name?>"><br>
            <input type="text" name="age" value="<?=$age?>"><br>
            <input type="submit">
        </form>
        <br>
<?php
if ($name and $age) {

    echo 'Your name: ' . $name . '<br>';
    echo 'Your age: ' . $age;
// echo 'Your name: '.$_GET['name'].'<br>'; !!! необхідна ОБОВ'ЯЗКОВА перевірка данних
// echo 'Your age: '.$_GET['age']; !!!

}
?>

	</tr>
</table>