<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 20.03.18
 * Time: 13:01
 */
$request = $_SERVER['REQUEST_URI'];
$request = substr($request,0,stripos($request,'?'));
echo $request;

//user/get/id/1
//$splits = explode('/',trim($request));
//var_dump($splits);