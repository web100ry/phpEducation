
<?php
$newdir="new";
for ($i=0x0;$i<=0xf; $i+=1) {

    for ($f = 0x0; $f <= 0xf; $f += 1) {
        $dir = dechex($i) . dechex($f);

        if (is_dir($dir)){
            $d = opendir($dir);


            while ($name = readdir($d)) {
                $oldName = $name;
                $len=strlen($name);
if ($len<3) continue;
                $name = substr_replace($name, '.jpeg', $len-4);
                echo "$oldName - $newdir/$dir/$name\n";
        mkdir("$newdir/$dir/", 0777);
        rename("$dir/$oldName", "$newdir/$dir/$name");
            }




closedir($d);
        }
       elseif (!is_dir($dir)) continue;
       


    }
}
    ?>