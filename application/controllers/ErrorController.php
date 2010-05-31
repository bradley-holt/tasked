<?php
/**
 * Tasked
 *
 * @category    Tasked
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://www.foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */

/**
 * Error Controller
 *
 * @category    Tasked
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://www.foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */
class ErrorController extends Zend_Controller_Action
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
     * Error Action
     *
     * @return void
     */
    public function errorAction()
    {
        $errors = $this->_getParam('error_handler');

        switch ($errors->type) {
            case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_ROUTE:
            case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_CONTROLLER:
            case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_ACTION:
                // 404 error -- controller or action not found
                $this->_forward('error404');
                break;
            default:
                // application error
                if ('testing' == APPLICATION_ENV) {
                    $exceptions = $this->getResponse()->getException();
                    throw $exceptions[0];
                }
                $this->_forward('error500');
                break;
        }
    }

    /**
     * Error 400 Action (Bad Request)
     *
     * @return void
     */
    public function error400Action()
    {
        $this->getResponse()->setHttpResponseCode(400);
    }

    /**
     * Error 401 Action (Unauthorized)
     *
     * @return void
     */
    public function error401Action()
    {
        $this->getResponse()->setHttpResponseCode(401);
    }

    /**
     * Error 403 Action (Forbidden)
     *
     * @return void
     */
    public function error403Action()
    {
        $this->getResponse()->setHttpResponseCode(403);
    }

    /**
     * Error 404 Action (Not Found)
     *
     * @return void
     */
    public function error404Action()
    {
        $this->getResponse()->setHttpResponseCode(404);
    }

    /**
     * Error 405 Action (Method Not Allowed)
     *
     * @return void
     */
    public function error405Action()
    {
        $this->getResponse()->setHttpResponseCode(405);
        $allow = $this->_getParam('allow');
        if (null !== $allow) {
            $this->getResponse()->setHeader('Allow', $allow);
        }
    }

    /**
     * Error 406 Action (Not Acceptable)
     *
     * @return void
     */
    public function error406Action()
    {
        $this->getResponse()->setHttpResponseCode(406);
    }

    /**
     * Error 409 Action (Conflict)
     *
     */
    public function error409Action()
    {
        $this->getResponse()->setHttpResponseCode(409);
    }

    /**
     * Error 411 Action (Length Required)
     *
     */
    public function error411Action()
    {
        $this->getResponse()->setHttpResponseCode(411);
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
