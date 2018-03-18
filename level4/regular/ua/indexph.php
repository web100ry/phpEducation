<?php
$db=mysqli_connect('localhost', 'root', 'qwerty', 'bdopencart');
$result = mysqli_query($db, 'select * from websites WHERE id>='.$_POST['idfrom'].' and id<'.$_POST['idto']);

while ($my = mysqli_fetch_object($result)) {

$website=$my->website;
$url="http://".$website;
$text=file_get_contents($url);
//$pattern1="/(?<!\w)(?:(?:(?:(?:\+?3)?8\W{0,3})?0\W{0,3})?[0-9]\s?\d[^\w,;(\+]{0,5})?\d\W{0,5}\d\W{0,3}\d\W{0,3}\d\W{0,3}\d\W{0,3}\d\W{0,3}\d(?!(\W?\d))/ux";
$pattern1="/(?<!\w)(?:(?:(?:(?:\+?3)?8[^A-Za-z0-9_.,%=#:<>]{0,3})?0[^A-Za-z0-9_.,%=#:<>]{0,3})?[0-9]\s?\d[^\w,;(\+]{0,5})?\d[^A-Za-z0-9_.,%=#:<>]{0,5}\d[^A-Za-z0-9_.,%=#:<>]{0,3}\d[^A-Za-z0-9_.,%=#:<>]{0,3}\d[^A-Za-z0-9_.,%=#:<>]{0,3}\d[^A-Za-z0-9_.,%=#:<>]{0,3}\d[^A-Za-z0-9_.,%=#:<>]{0,3}\d(?!([^A-Za-z0-9_.,%=#:<>]{0,3}?\d))/x";

    $res = preg_match_all($pattern1,$text,$matches);

$i=1;
if ($res)
{
    foreach (array_unique($matches[0]) as $phone[$i]) {
        if (mb_strlen($phone[$i], 'UTF-8') >= 10) {

            echo $website . " " . $phone[$i] . " " . $i . "<br>";
            $sql1 = 'UPDATE websites SET phone' . $i . '=\'' . $phone[$i] . '\' WHERE website=\'' . $website . '\'';
            mysqli_query($db, $sql1);
            if ($i == 2) {
                $sql2 = 'UPDATE websites SET phone2=\'' . $phone[$i] . '\' WHERE website=\'' . $website . '\'';
                mysqli_query($db, $sql2);
            }
            $i = $i + 1;
        }
    }
}
else {
$phone[1]="No phone found";
echo $website." ".$phone[1]."<br>";
$sql1='UPDATE websites SET phone1=\''.$phone[1].'\' WHERE website=\''.$website.'\'';
mysqli_query($db, $sql1);
}
}

?>
