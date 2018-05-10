<?php
class IndexController extends \Yaf\Controller_Abstract {
    /* default action */
    public function indexAction() {

        $this->getView()->word = "hello world";
    }
}
?>