
<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 20.03.18
 * Time: 9:02
 */
set_include_path(get_include_path()
.PATH_SEPARATOR. 'aplication/controllers'
.PATH_SEPARATOR. 'aplication/models'
.PATH_SEPARATOR. 'aplication/views');

function __autoload($class){
    require_once $class.'.php';
}

$front = FrontController::getInstance(); //initialization
$front->route();
echo $front->getBody();
?>