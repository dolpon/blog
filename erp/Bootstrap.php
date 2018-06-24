<?php
/* bootstrap class should be defined under ./application/Bootstrap.php */
class Bootstrap extends \Yaf\Bootstrap_Abstract {

    public function init()
    {
        session_start();
    }

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
        \Yaf\Loader::import(ERP_PATH . '/vendor/autoload.php');
        \Yaf\Loader::getInstance()->registerLocalNameSpace(array("Msg"));

    }

    /**
     * 添加路由
     * @param \Yaf\Dispatcher $dispatcher
     */
    public function _initRoute(\Yaf\Dispatcher $dispatcher) {
        $router = \Yaf\Dispatcher::getInstance()->getRouter();
        $rewriteRoute = new \Yaf\Route\Rewrite(
            'login/sign-in',
            array(
                'controller' => 'login',
                'action' => 'signIn'
            )
        );
        $router->addRoute('rewrite_route', $rewriteRoute);

        // aliexpress fetch order
        $router = \Yaf\Dispatcher::getInstance()->getRouter();
        $rewriteRoute = new \Yaf\Route\Rewrite(
            'aliexpress/fetch-order',
            array(
                'controller' => 'Aliexpress',
                'action' => 'fetchOrder'
            )
        );
        $router->addRoute('rewrite_route', $rewriteRoute);
    }

}