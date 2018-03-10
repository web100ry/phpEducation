<?php
$fileName = "data.csv";
$fileInfo = new SplFileInfo($fileName);
$fileProps = array();
$fileProps['size']=$fileInfo->getSize();
$fileProps['owner']=$fileInfo->getOwner();

var_dump($fileProps);
/*
 * перебыр всіх можливих методів класу
 */
foreach (get_class_methods(new SplFileInfo('*.*')) as $key=>$method){
    echo $key.'->'.$method.'<br>';
}

$it = new DirectoryIterator('./');
while($it->valid()) {
    echo $it->current()->getFileName().'<br> ';
    $it->next();
}

?>