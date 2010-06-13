<?php
/**
 * Tasked
 *
 * @category    Tasked
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */

/**
 * Error Controller
 *
 * @category    Tasked
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://foundline.com/)
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
                $this->_forward('error404', 'client-error');
                break;
            default:
                // application error
                if ('testing' == APPLICATION_ENV) {
                    $exceptions = $this->getResponse()->getException();
                    throw $exceptions[0];
                }
                $this->_forward('error500', 'server-error');
                break;
        }
    }
}
