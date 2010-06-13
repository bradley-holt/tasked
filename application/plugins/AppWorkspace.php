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
 * App Workspace Plugin
 *
 * @category    Tasked
 * @package     Tasked_Plugin
 * @license     http://foundline.com/legal/software-license/ New BSD License
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://foundline.com/)
 */
class Tasked_Plugin_AppWorkspace extends Zend_Controller_Plugin_Abstract
{
    /**
     * Route Startup
     *
     * @param Zend_Controller_Request_Abstract $request
     * @return void
     */
    public function routeStartup(Zend_Controller_Request_Abstract $request)
    {
        /* @var $appService Tasked_Model_AppService */
        $appService = $request->getParam('appService');
        $appWorkspace = new Tasked_Model_AppWorkspace();
        $taskCollection = new Tasked_Model_AppCollection();
        $taskCollection
            ->setControllerName('task')
            ->setAtomTitle('Tasks');
        $appWorkspace
            ->setModuleName('default')
            ->setAtomTitle('Default')
            ->setAppCollections(
                array (
                    $taskCollection,
                )
            );
        $appService
            ->setAppWorkspaces(
                array_merge(
                    $appService->getAppWorkspaces(),
                    array (
                        $appWorkspace,
                    )
                )
            );
    }
}
