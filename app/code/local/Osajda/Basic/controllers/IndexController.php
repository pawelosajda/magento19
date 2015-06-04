<?php

/**
 * Description of IndexController
 *
 * @author pawel
 */
class Osajda_Basic_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        Mage::log('Call Osajda_Basic_IndexController::indexAction', Zend_Log::INFO, 'osajda_basic.log');
        $this->loadLayout();
        $this->renderLayout();
    }
}
