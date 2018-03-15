<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 15.03.18
 * Time: 14:16
 */
include 'plugins.php';
function findPlugins(){
    $plugins = array();
    foreach (get_declared_classes() as $class){
            $rClass=new ReflectionClass($class);
            if($rClass->implementsInterface('IPLugin')){
                $plugins[]=$rClass;
            }
    }
    return $plugins;
}

function computeMenu(){
    $list = array();
    foreach (findPlugins() as $plugin){
        if ($plugin->hasMethod('getMenuItems')){
            $m=$plugin->getMethod('getMenuItems');
            if ($m->isStatic()){
                 $item = $m->invoke(null);
            }else{
                $obj = $plugin->newInstance();
                $item = $m->invoke($obj);
            }
        }
        $list[]=$item;
    }
    return $list;
}
$menu = computeMenu();
print_r($menu);