<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 20.03.18
 * Time: 11:08
 */
class View
{
    function render($file){
        ob_start();
        include (__DIR__.'/'.$file);
        return ob_get_clean();
    }
}