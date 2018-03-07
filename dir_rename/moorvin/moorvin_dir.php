
<?php

for ($i=0x0;$i<=0xf; $i+=1) {

    for ($f = 0x0; $f <= 0xf; $f += 1) {
        $dir = dechex($i) . dechex($f);
        if (is_dir($dir)){
            $d = opendir($dir);
            while ($name = readdir($d)) {
                $oldName = $name;
                $name = substr_replace($name, '', strlen($name)-4).'.jpeg';
                echo "$dir/$name\n";
                rename("$dir/$oldName", "$dir/$name");
            }
            closedir($d);
        }
       elseif (!is_dir($dir)) continue;
    }
}
    ?>

