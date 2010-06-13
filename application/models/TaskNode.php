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
 * Task Node
 *
 * @category    Tasked
 * @package     Tasked_Model
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */
class Tasked_Model_TaskNode
{
    /**
     * @var Zend_Date
     */
    private $_date;

    /**
     * Construct
     *
     * @param Zend_Date $date
     * @return Tasked_Model_TaskNode
     */
    public function __construct(Zend_Date $date = null)
    {
        $this->_date = $date;
    }

    /**
     * Get Date
     *
     * @return Zend_Date
     */
    public function getDate()
    {
        if (null === $this->_date) {
            return null;
        }
        return clone $this->_date;
    }
}
