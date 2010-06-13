<?php
/**
 * Tasked
 *
 * @category    Tasked
 * @package     Tasked_Model
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */

/**
 * App Service
 *
 * @category    Tasked
 * @package     Tasked_Model
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */
class Tasked_Model_AppService
{
    /**
     * @var array <Tasked_Model_AppWorkspace>
     */
    private $_appWorkspaces = array ();

    /**
     * Get App Workspaces
     *
     * @return array <Tasked_Model_AppWorkspace>
     */
    public function getAppWorkspaces()
    {
        return $this->_appWorkspaces;
    }

    /**
     * Set App Workspaces
     *
     * @param array <Tasked_Model_AppWorkspace> $value
     * @return Tasked_Model_AppService         Provide a fluent interface
     */
    public function setAppWorkspaces($value)
    {
        $this->_appWorkspaces = $value;
        return $this;
    }
}
