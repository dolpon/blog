<?php
define("ADMIN_PATH",  dirname(__FILE__).'/..');


$app  = new \Yaf\Application(ADMIN_PATH . "/conf/admin.ini");
session_start();
require_once ADMIN_PATH . '/Admin/library/Function/admin.php';

$app->bootstrap() //call bootstrap methods defined in Bootstrap.php
->run();
?>