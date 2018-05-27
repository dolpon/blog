<?php


class BaseController extends \Yaf\Controller_Abstract
{

    public function _init()
    {
        if(!isset($_SESSION['dolpon_admin_session'])) {
            header('/login');
        }
    }

    /**
     * Base 构造函数判断 用户是否登录
     *
     */
    public function Base()
    {
        $this->_init();


    }
}
?>