<?php
// custom class dir
define('CLASS_DIR', 'class/');
// Add your class dir to include path
//set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_extensions('.php');
spl_autoload_register(function ($class_name) {
    include CLASS_DIR.$class_name.'.class.php';
});

$obj1 = new SomeObject();
?>
