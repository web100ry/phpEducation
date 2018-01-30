<?php
$d=opendir(".");
while ($name=readdir($d)){
    if(is_dir($name))
        echo "<b>[$name]</b><br>";
    if(is_file($name))
        echo "$name<br>";
}
closedir($d);
?>