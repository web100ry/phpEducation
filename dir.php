
<?php
/*TODO

Даний коментар э тестовий для перевырки роботи ТУДУ ;)
*/

$files=scandir(".");// другий параметр 1 - зворотнє сортування
print_r($files);
foreach ($files as $file){
    echo $file."<br>";
}

/*
$d=opendir(".");
while ($name=readdir($d)){
if ($name=="." or $name=="..") continue;
    if(is_dir($name))
        echo "<b>[$name]</b><br>";
    if(is_file($name))
        echo "$name<br>";
}
closedir($d);
*/

?>