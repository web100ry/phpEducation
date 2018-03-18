


<?php
//$db=mysqli_connect('localhost', 'root', 'qwerty', 'dbemb');
for ($ii = 1; $ii <= 123; $ii++){
    $url1='https://index.woorank.com/en/reviews?technology=emberjs&page='.$ii;
    $p2='url:';
    $p3='score';
    $p1=file_get_contents($url1);
    for ($i = 1; $i <= 40; $i++){
        $num1= strpos($p1, $p2)+4;
        $num2= substr ($p1, $num1);
        $result = substr ($num2, 0, strpos($num2, $p3));
        $p1=substr ($num2,0);
        if ($i>20)
        {
    //        $sql1='INSERT INTO `websites`(`website`) VALUES (\''.$result.'\')';
      //      mysqli_query($db, $sql1);
            echo $result.'<br>';
        }

    }
}

?>



