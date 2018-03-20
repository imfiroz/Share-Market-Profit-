<?php
/**
* @author       Firoz Baksh
* @web         http://www.github.com/firoz8773
* @date     	19th March, 2018
* @copyright    No Copyrights, but please link back in any way
*/
 
/*
|---------------------------------------------------------------
| CASTING argc AND argv INTO LOCAL VARIABLES
|---------------------------------------------------------------
|
*/
$argc = $_SERVER['argc'];
$argv = $_SERVER['argv'];
 
// INTERPRETTING INPUT
if ($argc > 1 && isset($argv[1])) {
$_SERVER['PATH_INFO']   = $argv[1];
$_SERVER['REQUEST_URI'] = $argv[1];
} else {
$_SERVER['PATH_INFO']   = '/sharemarketprofit/index';
$_SERVER['REQUEST_URI'] = '/sharemarketprofit/index';
}
 
/*
|---------------------------------------------------------------
| PHP SCRIPT EXECUTION TIME ('0' means Unlimited)
|---------------------------------------------------------------
|
*/
set_time_limit(0); 
require_once('index.html');
 
/* End of file test.php */