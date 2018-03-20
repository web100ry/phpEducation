<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 20.03.18
 * Time: 10:13
 */

class FrontController{
    protected $_controller, $_action, $_param, $_body;
    static $_instance;
    public static function getInstance(){
        if(!(self::getInstance instsceOf self))
            self::$_instance = new self();
        return self::$_instance;
    }
}