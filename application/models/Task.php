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
 * Task
 *
 * @category    Tasked
 * @package     Tasked_Model
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://www.foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */
class Tasked_Model_Task
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
     * @var Tasked_Model_Resource
     */
    private $_resource;

    /**
     * @var Tasked_Model_TaskEdge
     */
    private $_targetEdge;

    /**
     * @var Tasked_Model_TaskEdge
     */
    private $_scheduledEdge;

    /**
     * @var Tasked_Model_TaskEdge
     */
    private $_actualEdge;

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
     * @return Tasked_Model_Task   Provide a fluent interface
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
     * @return Tasked_Model_Task   Provide a fluent interface
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
     * @return Tasker_Model_Task   Provide a fluent interface
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
     * @return Tasker_Model_Task   Provide a fluent interface
     */
    public function setPublished(Zend_Date $value = null)
    {
        $this->_published = $value;
        return $this;
    }

    /**
     * Get Resource
     *
     * @return Tasked_Model_Resource
     */
    public function getResource()
    {
        return $this->_resource;
    }

    /**
     * Set Resource
     *
     * @param Tasked_Model_Resource $value
     * @return Tasker_Model_Task   Provide a fluent interface
     */
    public function setResource(Tasked_Model_Resource $value = null)
    {
        $this->_resource = $value;
        return $this;
    }

    /**
     * Get Target Edge
     *
     * @return Tasked_Model_TaskEdge
     */
    public function getTargetEdge()
    {
        return $this->_targetEdge;
    }

    /**
     * Set Target Edge
     *
     * @param Tasked_Model_TaskEdge $value
     * @return Tasker_Model_Task   Provide a fluent interface
     */
    public function setTargetEdge(Tasked_Model_TaskEdge $value = null)
    {
        $this->_targetEdge = $value;
        return $this;
    }

    /**
     * Get Scheduled Edge
     *
     * @return Tasked_Model_TaskEdge
     */
    public function getScheduledEdge()
    {
        return $this->_scheduledEdge;
    }

    /**
     * Set Scheduled Edge
     *
     * @param Tasked_Model_TaskEdge $value
     * @return Tasker_Model_Task   Provide a fluent interface
     */
    public function setScheduledEdge(Tasked_Model_TaskEdge $value = null)
    {
        $this->_scheduledEdge = $value;
        return $this;
    }

    /**
     * Get Actual Edge
     *
     * @return Tasked_Model_TaskEdge
     */
    public function getActualEdge()
    {
        return $this->_actualEdge;
    }

    /**
     * Set Actual Edge
     *
     * @param Tasked_Model_TaskEdge $value
     * @return Tasker_Model_Task   Provide a fluent interface
     */
    public function setActualEdge(Tasked_Model_TaskEdge $value = null)
    {
        $this->_actualEdge = $value;
        return $this;
    }
}
