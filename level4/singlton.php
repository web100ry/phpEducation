<?php
class Config{
    const CONFIG_NAME='config.ini';
    static private $_instance = null;
    private $_setting;
    private $_update = false;

    private function __construct(){
      if(file_exists(self::CONFIG_NAME)){
          $this->_setting=parse_ini_file(self::CONFIG_NAME); // name=basya
      }
    }

// стандарт
    private function __clone(){} // закрили функцію від клонування

    static function getInstance(){
        if (self::$_instance==null){
            self::$_instance=new Config();
        }
        return self::$_instance;
    }

    public function get($name){
        if (isset($this->_setting[$name]))
            return $this->_setting[$name];
        else
            return null;
       }
    public function set($name, $value){
        if (!isset ($this->_setting[$name]) or
            ($this->_setting[$name] != $value)) {
            $this->_setting[$name]=$value;
            $this->_update=true;
        }
    }
    function __destruct(){
        if(!$this->_update) return;
        $fp = fopen(__DIR__.'/'.self::CONFIG_NAME,"w");
        if(!$fp) return;
        foreach ($this->_setting as $key=>$value){
            fputs($fp, "$key = \"$value\"\n");
        }
        fclose($fp);
    }
}

$conf=Config::getInstance();
echo $conf->get('name');
$conf->set("age",25);
$conf->set("username","root");
$conf->set("firstname","John");
$conf->set("lastname","Smith");
$conf->set("sex","Male");

echo $conf->get("firstname");

?>