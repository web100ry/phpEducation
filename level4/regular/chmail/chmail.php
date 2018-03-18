<?php
//$db=mysqli_connect('localhost', 'root', 'qwerty', 'dbemb');
//$result = mysqli_query($db, 'select * from websites WHERE id>='.$_POST['idfrom'].' and id<'.$_POST['idto']);
//while ($my = mysqli_fetch_object($result)) { }

$ve = new VerifyEmail('ivv74@narod.ru', 'v.ivaniuk@web-systems.solutions');

print_r($ve->get_errors());
print_r($ve->get_debug());

?>
