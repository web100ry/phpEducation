<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 20.03.18
 * Time: 11:01
 */
class IndexController implements IController
{
    function indexAction(){
        $fc = FrontController::getInstance();

        $view = new View();
        $view->name = 'Jhon';
        $result = $view->render('../views/index.php');
        $fc->setBody($result);
    }

}