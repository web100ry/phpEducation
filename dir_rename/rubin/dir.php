
<?php
/*TODO

Даний коментар э тестовий для перевырки роботи ТУДУ ;)
*/

$dir="ZEUGMA";
$d=opendir($dir);
while ($name=readdir($d)){
       	$oldName=$name;
    	$name=trim($name);
      //$name=substr_replace($name, '',0,1);
     $name=substr_replace($name, '',0,strlen($dir)+1);
        $name=trim($name);
      //$name=substr_replace($name, '',strlen($name)-9).".jpg";
    for ($i=0,  $len=strlen($name); $i<=($len-1); $i+=1) {
        if ($name[$i] == " "){$name[$i] = '_';break;}
    }
    for ($i=0,  $len=strlen($name); $i<=($len-1); $i+=1) {
        if ($name[$i] == " " && $name[$i-1]=="_" )$name[$i] = '';
    }
        echo "$name".PHP_EOL;
  rename("$dir/$oldName", "$dir/$name");
}
closedir($d);
?>