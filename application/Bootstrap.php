<?php
/* bootstrap class should be defined under ./application/Bootstrap.php */
class Bootstrap extends \Yaf\Bootstrap_Abstract {
    /**
     * 配置
     */
    public function _initConfig()
    {
        $this->config = \Yaf\Application::app()->getConfig();//把配置保存起来
        \Yaf\Registry::set('config', $this->config);
    }
//    public function _initPlugin(Yaf\Dispatcher $dispatcher) {
////        var_dump(__METHOD__);
//    }

    public function _initLoader()
    {
        \Yaf\Loader::import(APPLICATION_PATH . '/vendor/autoload.php');
    }


}