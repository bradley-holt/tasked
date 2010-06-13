<?php
/**
 * Tasked
 *
 * @category    Tasked
 * @package     Tasked_Plugin
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */

/**
 * App Service Plugin
 *
 * @category    Tasked
 * @package     Tasked_Plugin
 * @license     http://foundline.com/legal/software-license/ New BSD License
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://foundline.com/)
 */
class Tasked_Plugin_AppService extends Zend_Controller_Plugin_Abstract
{
    /**
     * Route Startup
     *
     * @param Zend_Controller_Request_Abstract $request
     * @return void
     */
    public function routeStartup(Zend_Controller_Request_Abstract $request)
    {
        $appService = new Tasked_Model_AppService();
        $request->setParam('appService', $appService);
    }
}
