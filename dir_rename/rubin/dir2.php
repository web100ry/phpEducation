
<?php
/*TODO

Даний коментар э тестовий для перевырки роботи ТУДУ ;)
*/

$dir="HEREKE LUX";
$d=opendir($dir);
while ($name=readdir($d)){
       	$oldName=$name;
    	$name=trim($name);

        echo "$name".PHP_EOL;
    if (!$oldName==$name) rename("$dir/$oldName", "$dir/$name");
}
closedir($d);
?>