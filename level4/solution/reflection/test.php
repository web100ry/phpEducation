<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 13.03.18
 * Time: 9:22
 */
function seyHello($name,$h=3){
    static $count =0;
return "<h$h>Hello $name!</h$h>";
}

Reflection::export(new ReflectionFunction('seyHello'));

