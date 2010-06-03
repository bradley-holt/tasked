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
 * Task Edge
 *
 * @category    Tasked
 * @package     Tasked_Model
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://www.foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */
class Tasked_Model_TaskEdge
{
    /**
     * @var Tasked_Model_TaskNode
     */
    private $_taskNodeA;

    /**
     * @var Tasked_Model_TaskNode
     */
    private $_taskNodeB;

    /**
     * Construct
     *
     * @param Tasked_Model_TaskNode $taskNodeA
     * @param Tasked_Model_TaskNode $taskNodeB
     * @return Tasked_Model_TaskEdge
     */
    public function __construct(
        Tasked_Model_TaskNode $taskNodeA,
        Tasked_Model_TaskNode $taskNodeB
    )
    {
        $this->_taskNodeA = $taskNodeA;
        $this->_taskNodeB = $taskNodeB;
    }

    /**
     * Get Task Node A
     *
     * @return Tasked_Model_TaskNode
     */
    public function getTaskNodeA()
    {
        return $this->_taskNodeA;
    }

    /**
     * Get Task Node B
     *
     * @return Tasked_Model_TaskNode
     */
    public function getTaskNodeB()
    {
        return $this->_taskNodeB;
    }
}
