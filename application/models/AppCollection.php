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
 * App Collection
 *
 * @category    Tasked
 * @package     Tasked_Model
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */
class Tasked_Model_AppCollection
{
    /**
     * @var string
     */
    private $_controllerName;

    /**
     * @var string
     */
    private $_atomTitle;

    /**
     * Get Controller Name
     *
     * @return string
     */
    public function getControllerName()
    {
        return $this->_controllerName;
    }

    /**
     * Set Controller Name
     *
     * @param string $value
     * @return Tasked_Model_AppCollection      Provide a fluent interface
     */
    public function setControllerName($value)
    {
        $this->_controllerName = (string)$value;
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
     * @return Tasked_Model_AppCollection      Provide a fluent interface
     */
    public function setAtomTitle($value)
    {
        $this->_atomTitle = (string)$value;
        return $this;
    }
}
