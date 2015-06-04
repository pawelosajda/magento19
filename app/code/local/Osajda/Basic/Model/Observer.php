<?php

/**
 * Description of Observer
 *
 * @author pawel
 */
class Osajda_Basic_Model_Observer extends Mage_Core_Model_Abstract
{
    public function cron()
    {
        $time = date('Y-m-d G:i:s');
        Mage::log("Call Osajda_Basic_Model_Observer::cron $time", Zend_Log::INFO, 'osajda_basic_cron.log', true);
    }
}
