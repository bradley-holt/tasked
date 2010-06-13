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
 * Atom Entry
 *
 * @category    Tasked
 * @package     Tasked_Model
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */
abstract class Tasked_Model_AtomEntry
{
    /**
     * @var string
     */
    private $_uuid;

    /**
     * @var string
     */
    private $_title;

    /**
     * @var Zend_Date
     */
    private $_updated;

    /**
     * @var Zend_Date
     */
    private $_published;

    /**
     * Get UUID
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->_uuid;
    }

    /**
     * Set UUID
     *
     * @param string $value
     * @return Tasked_Model_AtomEntry   Provide a fluent interface
     */
    public function setUuid($value)
    {
        if (null !== $value) {
            $value = (string)$value;
        }
        $this->_uuid = $value;
        return $this;
    }

    /**
     * Get Title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * Set Title
     *
     * @param string $value
     * @return Tasked_Model_AtomEntry   Provide a fluent interface
     */
    public function setTitle($value)
    {
        if (null !== $value) {
            $value = (string)$value;
        }
        $this->_title = $value;
        return $this;
    }

    /**
     * Get Updated
     *
     * @return Zend_Date
     */
    public function getUpdated()
    {
        if (null === $this->_updated) {
            return null;
        }
        return clone $this->_updated;
    }

    /**
     * Set Updated
     *
     * @param Zend_Date $value
     * @return Tasked_Model_AtomEntry   Provide a fluent interface
     */
    public function setUpdated(Zend_Date $value = null)
    {
        $this->_updated = $value;
        return $this;
    }

    /**
     * Get Published
     *
     * @return Zend_Date
     */
    public function getPublished()
    {
        if (null === $this->_published) {
            return null;
        }
        return clone $this->_published;
    }

    /**
     * Set Published
     *
     * @param Zend_Date $value
     * @return Tasked_Model_AtomEntry   Provide a fluent interface
     */
    public function setPublished(Zend_Date $value = null)
    {
        $this->_published = $value;
        return $this;
    }
}
