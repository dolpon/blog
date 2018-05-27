<?php

use Msg\MsgClient as Msg;


class LoginController extends \Yaf\Controller_Abstract {

    private $model;

    public function init()
    {
        $this->getView('login')->word = "hello world";
        $this->model = new UserModel();
    }

    public function indexAction()
    {

    }

    public function signInAction()
    {
        $email = isset($_REQUEST['email']) ? trim($_REQUEST['email']) : '';
        $password = isset($_REQUEST['password']) ? trim($_REQUEST['password']) : '';
        $user = $this->model->getOneUser(['email'=>$email, 'password'=>$password], '*');
        if(empty($user)){
            Msg::returnMsg('登录失败，请检查邮箱或者密码');
        }
        $status = $this->signInSuccess($user);

        if(!$status) {
            Msg::returnMsg('登录失败，用户认证失败');
        }
        Msg::returnMsg(get_app_host(), 200);
        exit;
    }

    public function signInSuccess($userInfo)
    {
        $_SESSION['dop_admin_session'] = md5($userInfo['name'].$userInfo['email'].$userInfo['password']);
        return true;
    }

}
?>