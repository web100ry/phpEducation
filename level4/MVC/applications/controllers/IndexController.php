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
        $params = $fc->getParams();
        $view = new View();
       // $view->name = 'Jhon';
        $view->name = $params['name'];
        $result = $view->render('../views/index.php');
        $fc->setBody($result);
    }

}