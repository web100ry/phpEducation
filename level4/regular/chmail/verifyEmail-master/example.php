<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'vendor/autoload.php';

$ve = new hbattat\VerifyEmail('<EMAIL TO VERIFY>', '<VALID EMAIL FROM YOUR SERVER>');

var_dump($ve->verify());

echo '<pre>';print_r($ve->get_debug());
