<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12.03.18
 * Time: 22:44
 */
interface FileNaming{
    function createLinkName($fileName);
}
class ZipFile{
    function createLinkName($fileName){
        return "http://localhost/down/$fileName.zip";
    }
}
class TarFile{
    function createLinkName($fileName){
        return "http://localhost/down/$fileName.tar.gz";
    }
}

if (strstr($_SERVER['HTTP_USER_AGENT'],'Win')){
    $obj= new ZipFile();
}
else {
    $obj = new TarFile();
}
echo $obj->createLinkName("file1")."<br>";
echo $obj->createLinkName("file2")."<br>";
