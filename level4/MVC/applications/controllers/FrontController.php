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
        if(!(self::$_instance instanceOf self))
            self::$_instance = new self();
        return self::$_instance;
    }
    private function __construct()
    {
        $request = $_SERVER['REQUEST_URI'];
        //user/get/id/1
   //     $request = substr($request,0,stripos($request,'?'))."Index/index/name/Mike"; // for xDebug
        $splits = explode('/',trim($request));
// вибір контроллера
$this->_controller = !empty($splits[3])?ucfirst($splits[3]).'Controller':'IndexController';
//вибір екшина
$this->_action = !empty($splits[4])?($splits[4].'Action'):'indexAction';
//перебір параметрів
        if (!empty($splits[5])){
    $keys = $values = array();
        for ($i=5, $cnt=count($splits);$i<$cnt;$i++){
                if ($i%2==0) //якщо парне
                    $values[] = $splits[$i];
                else
                    $keys[] = $splits[$i];
            }
            $this->_param = array_combine($keys,$values);
        }
    }
    public function route()
    {
        if (class_exists($this->getController())){
            $rc = new ReflectionClass($this->getController());
            if($rc->implementsInterface('IController')){
                if ($rc->hasMethod($this->getAction())){
                    $controller = $rc->newInstance();
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
        $this->_body=$body;
    }

}