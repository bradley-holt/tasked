<?php
/**
 * Tasked
 *
 * @category    Tasked
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */

/**
 * Index Controller
 *
 * @category    Tasked
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */
class IndexController extends Zend_Rest_Controller
{
    /**
     * Init
     *
     * @return void
     */
    public function init()
    {
        /* Initialize action controller here */
    }

    /**
     * Index Action
     *
     * @return void
     */
    public function indexAction()
    {
        $this->getResponse()
            ->setHeader('Content-Type', 'application/atomsvc+xml');
        /* @var $appService Tasked_Model_AppService */
        $appService = $this->_getParam('appService');
        $this->view->appService = $appService;
    }

    /**
     * Get Action
     *
     * @return void
     */
    public function getAction()
    {
        $this->_forward('error404', 'client-error');
    }

    /**
     * Post Action
     *
     * @return void
     */
    public function postAction()
    {
        $this->_setParam('allow', 'GET');
        $this->_forward('error405', 'client-error');
    }

    /**
     * Put Action
     *
     * @return void
     */
    public function putAction()
    {
        $this->_forward('error404', 'client-error');
    }

    /**
     * Delete Action
     *
     * @return void
     */
    public function deleteAction()
    {
        $this->_forward('error404', 'client-error');
    }
}
