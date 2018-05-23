<?php


class IndexController extends BaseController
{
    /* default action */

//    public function __construct()
//    {
//        parent::__construct();
//    }

    public function indexAction()
    {
        if(!isset($_SESSION['dolpon'])){
            header('location://admin.dolpon.local/login');
            exit;
        }
        $this->getView()->word = "hello world";
    }



}
?>