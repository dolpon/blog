<?php
define("ADMIN_PATH",  dirname(__FILE__).'/..');

$app  = new \Yaf\Application(ADMIN_PATH . "/conf/admin.ini");
$app->bootstrap() //call bootstrap methods defined in Bootstrap.php
->run();
?>