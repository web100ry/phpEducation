<?php
$db=mysqli_connect('localhost', 'root', 'qwerty', 'bdgb');
$result = mysqli_query($db, 'select * from `TABLE 2` WHERE id>='.$_POST['idfrom'].' and id<'.$_POST['idto']);

while ($my = mysqli_fetch_object($result)) {

$website=$my->website;
$url="http://".$website;
$text=file_get_contents($url);
$res = preg_match_all("/[a-z0-9]+[_a-z0-9.-]*[a-z0-9]+@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})/i",$text,$matches);
$i=1;
if ($res) {
foreach (array_unique($matches[0]) as $email[$i]) {
echo $website." ".$email[$i] ." ".$i."<br>";
$sql1='UPDATE `TABLE 2` SET email'.$i.'=\''.$email[$i].'\' WHERE website=\''.$website.'\'';
mysqli_query($db, $sql1);
if ($i==2){
$sql2='UPDATE `TABLE 2` SET email2=\''.$email[$i].'\' WHERE website=\''.$website.'\'';
mysqli_query($db, $sql2);
}
$i=$i+1;
}
}
else {
$email[1]="No emails found";
echo $website." ".$email[1]."<br>";
$sql1='UPDATE `TABLE 2` SET email1=\''.$email[1].'\' WHERE website=\''.$website.'\'';
mysqli_query($db, $sql1);
}
}

?>
