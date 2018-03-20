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
    private function __construct()
    {
        $request = $_SERVER['REQUEST_URI'];
        //user/get/id/1
        $splits = explode('/',trim($request),'/');
// вибір контроллера
$this->_controller = !empty($splits[0])?ucfirst($splits[0].'Controller':'IndexController');
//вибір екшина
$thus->_action = !empty($splits[1])?$splits[1].'Action':'IndexAction'
//перебір параметрів
        if (!empty($splits[2])){
    $keys = $values = array();
        for ($i=2, $cnt=count($splits);$i<$cnt;$i++){
                if ($i%2==0) //якщо парне
                    $keys[] = $splits[$i];
                else
                    $values[] = $splits[$i];
            }
            $this->_param = array_combine($keys,$values);
        }
    }
    public function route(){
        if (class_exists($this->getController())){
            $rc = new ReflectionClass($this->getController());
            if($rc->implementsInterface('IController')){
                if ($rc->hasMeshod($this->getAction())){
                    $controller = $rc->newInterface();
                    $method = $rc->getMethod($this->getAction());
                    $method->invoke($controller);
                }else{
                    throw new Exception ('Wrong Action!');
                }
            }else{
                throw new Exception ('Wrong Interface!');
            }
        }else{
            throw new Exception ('Wrong Controller!');
        }
    }
    function getParams(){
        return $this->_param;
    }
    function getController(){
        return $this->_controller;
    }
    function getAction(){
        return $this->_action;
    }
    function getBody(){
        return $this->_body;
    }
    function setBody($body){
        return $this->_body=$body;
    }

}