<?php
for ($ii = 1; $ii <= 102; $ii++){
$url1='https://index.woorank.com/en/reviews?country=gb&technology=opencart&page='.$ii;
$p2='url:';
$p3='score';
$p1=file_get_contents($url1);
for ($i = 1; $i <= 40; $i++){
$num1= strpos($p1, $p2)+4;
$num2= substr ($p1, $num1);
$result = substr ($num2, 0, strpos($num2, $p3));
$p1=substr ($num2,0);
if ($i>20) echo $result.'<br>';
}
}

?>

