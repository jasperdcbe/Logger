<?php
/**
 * Created by JetBrains PhpStorm.
 * User: spies
 * Date: 31.03.12 (13 KW)
 * Time: 13:32
 * To change this template use File | Settings | File Templates.
 */
class Hackathon_Logger_IndexController extends Mage_Core_Controller_Front_Action
{

	public function indexAction()
	{
		Mage::log("Hello", Zend_Log::CRIT);
        Mage::log("Hello2", Zend_Log::CRIT);

    }

}
