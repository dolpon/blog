<?php




class LoginController extends \Yaf\Controller_Abstract {

    public function indexAction()
    {
        $this->getView('login')->word = "hello world";
    }

    public function signinAction()
    {
        var_dump($_REQUEST);exit;
    }

}
?>