<?php
$db=mysqli_connect('localhost', 'root', 'qwerty', 'bdgb');
$result = mysqli_query($db, 'select * from `TABLE 2` WHERE id>='.$_POST['idfrom'].' and id<'.$_POST['idto']);

while ($my = mysqli_fetch_object($result)) {

    $website=$my->website;
    $url="http://".$website;
    $text=file_get_contents($url);
    $pattern1="((\(?0\)? ?1\d{3}[ -][\d -]{5,8})|(\(?0\)? ?1[35679][23469][46789][234567][ -][\d -]{4,6})|(\(?0\)? ?1\d{2}[ -]\d{3}[ -][\d -]{4,5})|(\(?0\)? ?2\d[ -][\d -]{4,5}[ -][\d -]{4,5})|(\(?0\)? ?[389]\d{2}[ -]\d{3}[ -][\d -]{4,5})|(\(?0\)? ?[389]\d{2}[ -]\d{3}[ -][\d -]{4,5})|(\(?0\)? ?[57]\d{3}[ -][\d -]{6,8})|(\(?0\)? ?800[ -][\d -]{6,8}))";
    $res = preg_match_all($pattern1,$text,$matches);

    $i=1;
    if ($res)
    {
        foreach (array_unique($matches[0]) as $phone[$i]) {
            if (mb_strlen($phone[$i], 'UTF-8') >= 10) {

                echo $website . " " . $phone[$i] . " " . $i . "<br>";
                $sql1 = 'UPDATE `TABLE 2` SET phone' . $i . '=\'' . $phone[$i] . '\' WHERE website=\'' . $website . '\'';
                mysqli_query($db, $sql1);
                if ($i == 2) {
                    $sql2 = 'UPDATE `TABLE 2` SET phone2=\'' . $phone[$i] . '\' WHERE website=\'' . $website . '\'';
                    mysqli_query($db, $sql2);
                }
                $i = $i + 1;
            }
        }
    }
    else {
        $phone[1]="No phone found";
        echo $website." ".$phone[1]."<br>";
        $sql1='UPDATE `TABLE 2` SET phone1=\''.$phone[1].'\' WHERE website=\''.$website.'\'';
        mysqli_query($db, $sql1);
    }
}

?>
