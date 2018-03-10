<?php

foreach (get_class_methods(new DirectoryIterator('.')) as $key=>$method){
    echo $key.'->'.$method.'<br>';
}
?>