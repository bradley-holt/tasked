<?php
/**
 * Tasked
 *
 * @category    Tasked
 * @package     Tasked_Model
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://www.foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */

/**
 * App Workspace
 *
 * @category    Tasked
 * @package     Tasked_Model
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://www.foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */
class Tasked_Model_AppWorkspace
{
    /**
     * @var string
     */
    private $_moduleName;

    /**
     * @var string
     */
    private $_atomTitle;

    /**
     * @var array <Tasked_Model_AppCollection>
     */
    private $_appCollections = array ();

    /**
     * Get Module Name
     *
     * @return string
     */
    public function getModuleName()
    {
        return $this->_moduleName;
    }

    /**
     * Set Module Name
     *
     * @param string $value
     * @return Tasked_Model_AppWorkspace       Provide a fluent interface
     */
    public function setModuleName($value)
    {
        $this->_moduleName = (string)$value;
        return $this;
    }

    /**
     * Get Atom Title
     *
     * @return string
     */
    public function getAtomTitle()
    {
        return $this->_atomTitle;
    }

    /**
     * Set Atom Title
     *
     * @param string $value
     * @return Tasked_Model_AppWorkspace       Provide a fluent interface
     */
    public function setAtomTitle($value)
    {
        $this->_atomTitle = (string)$value;
        return $this;
    }

    /**
     * Get App Collections
     *
     * @return array <Tasked_Model_AppCollection>
     */
    public function getAppCollections()
    {
        return $this->_appCollections;
    }

    /**
     * Set App Collections
     *
     * @param array <Tasked_Model_AppCollection> $value
     * @return Tasked_Model_AppWorkspace       Provide a fluent interface
     */
    public function setAppCollections($value)
    {
        $this->_appCollections = $value;
        return $this;
    }
}
