
<?php
/*TODO

Даний коментар э тестовий для перевырки роботи ТУДУ ;)
*/
/*
$files=scandir(".");// другий параметр 1 - зворотнє сортування
print_r($files);
foreach ($files as $file){
    echo $file."<br>";
}
*/
function dirs($dir, $tab1)
{
    $d = opendir($dir);
    while ($name = readdir($d)) {
        $tab=$tab1;
        if ($name == "." or $name == "..") continue;
        if (!is_file($name)) {
            echo "<b>".$tab." [$name]</b><br>";
            $tab.= "-";
            dirs($dir."/$name/".".",$tab);
        } else
            echo "$tab$name<br>";
    }
    closedir($d);
}
dirs(".","-");
?>