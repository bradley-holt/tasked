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
 * An entity identified by its Universally Unique Identifier (UUID).
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
     * Return the entity's Universally Unique Identifier (UUID).
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
     * Set the entity's Universally Unique Identifier (UUID) to the specified
     * value. Return the entity in order to provide a fluent interface.
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
     * Return the entity's title.
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
     * Set the entity's title to the specified value. Return the entity in order
     * to provide a fluent interface.
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
     * Return the date and time at which the entity was last updated.
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
     * Set the date and time at which the entity was last updated. Return the
     * entity in order to provide a fluent interface.
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
     * Return the date and time at which the entity was published.
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
     * Set the date and time at which the entity was published. Return the
     * entity in order to provide a fluent interface.
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
