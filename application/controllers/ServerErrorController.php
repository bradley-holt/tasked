<?php
/**
 * Tasked
 *
 * @category    Tasked
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */

/**
 * Server Error Controller
 *
 * @category    Tasked
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */
class ServerErrorController extends Zend_Controller_Action
{
    /**
     * Pre Dispatch
     *
     * @return void
     */
    public function preDispatch()
    {
        $this->_helper->viewRenderer->setNoRender();
    }

    /**
     * Error 500 Action (Internal Server Error)
     *
     * @return void
     */
    public function error500Action()
    {
        $this->getResponse()->setHttpResponseCode(500);
    }

    /**
     * Error 503 Action (Service Unavailable )
     *
     * @return void
     */
    public function error503Action()
    {
        $this->getResponse()->setHttpResponseCode(503);
        $retryAfter = $this->_getParam('retry-after');
        if (null !== $retryAfter) {
            $this->getResponse()->setHeader('Retry-After', $retryAfter);
        }
    }
}
