<?php
define("ERP_PATH",  dirname(__FILE__).'/..');

$app  = new \Yaf\Application(ERP_PATH . "/conf/erp.ini");
$app->bootstrap() //call bootstrap methods defined in Bootstrap.php
->run();
?>