<?php

if(!function_exists('get_app_host')){
    function get_app_host()
    {
        $db_config = Yaf\Application::app()->getConfig()->admin;
        return $db_config['app_host'];
    }
}