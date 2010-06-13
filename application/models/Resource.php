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
 * Resource
 *
 * @category    Tasked
 * @package     Tasked_Model
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://www.foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */
class Tasked_Model_Resource extends Tasked_Model_AtomEntry
{
    /**
     * Set UUID
     *
     * @param string $value
     * @return Tasked_Model_Resource    Provide a fluent interface
     */
    public function setUuid($value)
    {
        return parent::setUuid($value);
    }

    /**
     * Set Title
     *
     * @param string $value
     * @return Tasked_Model_Resource    Provide a fluent interface
     */
    public function setTitle($value)
    {
        return parent::setTitle($value);
    }

    /**
     * Set Updated
     *
     * @param Zend_Date $value
     * @return Tasked_Model_Resource    Provide a fluent interface
     */
    public function setUpdated(Zend_Date $value = null)
    {
        return parent::setUpdated($value);
    }

    /**
     * Set Published
     *
     * @param Zend_Date $value
     * @return Tasked_Model_Resource    Provide a fluent interface
     */
    public function setPublished(Zend_Date $value = null)
    {
        return parent::setPublished($value);
    }
}
