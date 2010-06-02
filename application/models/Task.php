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
     * @var Tasked_Model_TaskNode
     */
    private $_targetStartNode;

    /**
     * @var Tasked_Model_TaskNode
     */
    private $_targetFinishNode;

    /**
     * @var Tasked_Model_TaskNode
     */
    private $_scheduledStartNode;

    /**
     * @var Tasked_Model_TaskNode
     */
    private $_scheduledFinishNode;

    /**
     * @var Tasked_Model_TaskNode
     */
    private $_actualStartNode;

    /**
     * @var Tasked_Model_TaskNode
     */
    private $_actualFinishNode;

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
     * Get Target Start Node
     *
     * @return Tasked_Model_TaskNode
     */
    public function getTargetStartNode()
    {
        return $this->_targetStartNode;
    }

    /**
     * Set Target Start Node
     *
     * @param Tasked_Model_TaskNode $value
     * @return Tasker_Model_Task   Provide a fluent interface
     */
    public function setTargetStartNode(Tasked_Model_TaskNode $value = null)
    {
        $this->_targetStartNode = $value;
        return $this;
    }

    /**
     * Get Target Finish Node
     *
     * @return Tasked_Model_TaskNode
     */
    public function getTargetFinishNode()
    {
        return $this->_targetFinishNode;
    }

    /**
     * Set Target Finish Node
     *
     * @param Tasked_Model_TaskNode $value
     * @return Tasker_Model_Task   Provide a fluent interface
     */
    public function setTargetFinishNode(Tasked_Model_TaskNode $value = null)
    {
        $this->_targetFinishNode = $value;
        return $this;
    }

    /**
     * Get Scheduled Start Node
     *
     * @return Tasked_Model_TaskNode
     */
    public function getScheduledStartNode()
    {
        return $this->_scheduledStartNode;
    }

    /**
     * Set Scheduled Start Node
     *
     * @param Tasked_Model_TaskNode $value
     * @return Tasker_Model_Task   Provide a fluent interface
     */
    public function setScheduledStartNode(Tasked_Model_TaskNode $value = null)
    {
        $this->_scheduledStartNode = $value;
        return $this;
    }

    /**
     * Get Scheduled Finish Node
     *
     * @return Tasked_Model_TaskNode
     */
    public function getScheduledFinishNode()
    {
        return $this->_scheduledFinishNode;
    }

    /**
     * Set Scheduled Finish Node
     *
     * @param Tasked_Model_TaskNode $value
     * @return Tasker_Model_Task   Provide a fluent interface
     */
    public function setScheduledFinishNode(Tasked_Model_TaskNode $value = null)
    {
        $this->_scheduledFinishNode = $value;
        return $this;
    }

    /**
     * Get Actual Start Node
     *
     * @return Tasked_Model_TaskNode
     */
    public function getActualStartNode()
    {
        return $this->_actualStartNode;
    }

    /**
     * Set Actual Start Node
     *
     * @param Tasked_Model_TaskNode $value
     * @return Tasker_Model_Task   Provide a fluent interface
     */
    public function setActualStartNode(Tasked_Model_TaskNode $value = null)
    {
        $this->_actualStartNode = $value;
        return $this;
    }

    /**
     * Get Actual Finish Node
     *
     * @return Tasked_Model_TaskNode
     */
    public function getActualFinishNode()
    {
        return $this->_actualFinishNode;
    }

    /**
     * Set Actual Finish Node
     *
     * @param Tasked_Model_TaskNode $value
     * @return Tasker_Model_Task   Provide a fluent interface
     */
    public function setActualFinishNode(Tasked_Model_TaskNode $value = null)
    {
        $this->_actualFinishNode = $value;
        return $this;
    }
}
