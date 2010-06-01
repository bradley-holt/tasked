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
     * @var Zend_Date
     */
    private $_targetStart;

    /**
     * @var Zend_Date
     */
    private $_targetFinish;

    /**
     * @var Zend_Date
     */
    private $_scheduledStart;

    /**
     * @var Zend_Date
     */
    private $_scheduledFinish;

    /**
     * @var Zend_Date
     */
    private $_actualStart;

    /**
     * @var Zend_Date
     */
    private $_actualFinish;

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
     * Get Target Start
     *
     * @return Zend_Date
     */
    public function getTargetStart()
    {
        if (null === $this->_targetStart) {
            return null;
        }
        return clone $this->_targetStart;
    }

    /**
     * Set Target Start
     *
     * @param Zend_Date $value
     * @return Tasker_Model_Task   Provide a fluent interface
     */
    public function setTargetStart(Zend_Date $value = null)
    {
        $this->_targetStart = $value;
        return $this;
    }

    /**
     * Get Target Finish
     *
     * @return Zend_Date
     */
    public function getTargetFinish()
    {
        if (null === $this->_targetFinish) {
            return null;
        }
        return clone $this->_targetFinish;
    }

    /**
     * Set Target Finish
     *
     * @param Zend_Date $value
     * @return Tasker_Model_Task   Provide a fluent interface
     */
    public function setTargetFinish(Zend_Date $value = null)
    {
        $this->_targetFinish = $value;
        return $this;
    }

    /**
     * Get Scheduled Start
     *
     * @return Zend_Date
     */
    public function getScheduledStart()
    {
        if (null === $this->_scheduledStart) {
            return null;
        }
        return clone $this->_scheduledStart;
    }

    /**
     * Set Scheduled Start
     *
     * @param Zend_Date $value
     * @return Tasker_Model_Task   Provide a fluent interface
     */
    public function setScheduledStart(Zend_Date $value = null)
    {
        $this->_scheduledStart = $value;
        return $this;
    }

    /**
     * Get Scheduled Finish
     *
     * @return Zend_Date
     */
    public function getScheduledFinish()
    {
        if (null === $this->_scheduledFinish) {
            return null;
        }
        return clone $this->_scheduledFinish;
    }

    /**
     * Set Scheduled Finish
     *
     * @param Zend_Date $value
     * @return Tasker_Model_Task   Provide a fluent interface
     */
    public function setScheduledFinish(Zend_Date $value = null)
    {
        $this->_scheduledFinish = $value;
        return $this;
    }

    /**
     * Get Actual Start
     *
     * @return Zend_Date
     */
    public function getActualStart()
    {
        if (null === $this->_actualStart) {
            return null;
        }
        return clone $this->_actualStart;
    }

    /**
     * Set Actual Start
     *
     * @param Zend_Date $value
     * @return Tasker_Model_Task   Provide a fluent interface
     */
    public function setActualStart(Zend_Date $value = null)
    {
        $this->_actualStart = $value;
        return $this;
    }

    /**
     * Get Actual Finish
     *
     * @return Zend_Date
     */
    public function getActualFinish()
    {
        if (null === $this->_actualFinish) {
            return null;
        }
        return clone $this->_actualFinish;
    }

    /**
     * Set Actual Finish
     *
     * @param Zend_Date $value
     * @return Tasker_Model_Task   Provide a fluent interface
     */
    public function setActualFinish(Zend_Date $value = null)
    {
        $this->_actualFinish = $value;
        return $this;
    }
}
