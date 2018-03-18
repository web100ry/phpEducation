<?php
$db=mysqli_connect('localhost', 'root', 'qwerty', 'bdopencart');
$result = mysqli_query($db, 'select * from websites WHERE id>=816 and id<900');

while ($my = mysqli_fetch_object($result)) {

$website=$my->website;
$url="http://".$website;
$text=file_get_contents($url);
$res = preg_match_all("/[a-z0-9]+[_a-z0-9.-]*[a-z0-9]+@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})/i",$text,$matches);
$i=1;
if ($res) {
foreach (array_unique($matches[0]) as $email[$i]) {
echo $website." ".$email[$i] ." ".$i."<br>";
$sql1='UPDATE websites SET email'.$i.'=\''.$email[$i].'\' WHERE website=\''.$website.'\'';
mysqli_query($db, $sql1);
if ($i==2){
$sql2='UPDATE websites SET email2=\''.$email[$i].'\' WHERE website=\''.$website.'\'';
mysqli_query($db, $sql2);
}
$i=$i+1;
}
}
else {
$email[1]="No emails found";
echo $website." ".$email[1]."<br>";
$sql1='UPDATE websites SET email1=\''.$email[1].'\' WHERE website=\''.$website.'\'';
mysqli_query($db, $sql1);
}
}

?>
