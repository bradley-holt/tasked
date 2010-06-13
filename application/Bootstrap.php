<?php
/**
 * Tasked
 *
 * @category    Tasked
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */

/**
 * Bootstrap
 *
 * @category    Tasked
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    /**
     * Init Router
     *
     * @param array $options
     * @return void
     */
    protected function _initRouter(array $options = null)
    {
        $this->bootstrap('frontController');
        /* @var $frontController Zend_Controller_Front */
        $frontController = $this->frontController;
        $restRoute = new Zend_Rest_Route($frontController);
        $frontController->getRouter()->addRoute('default', $restRoute);
    }

    protected function _initPlugins()
    {
        $this->bootstrap('frontController');
        /* @var $frontController Zend_Controller_Front */
        $frontController = $this->frontController;
        $frontController->registerPlugin(new Tasked_Plugin_AppService());
        $frontController->registerPlugin(new Tasked_Plugin_AppWorkspace());
    }

    protected function _initRegistry()
    {
        $this->bootstrap('db');
        $db = $this->getResource('db');
        Zend_Registry::set('db', $db);
    }
}

