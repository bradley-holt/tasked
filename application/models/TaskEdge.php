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
 * Task Edge
 *
 * @category    Tasked
 * @package     Tasked_Model
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */
class Tasked_Model_TaskEdge
{
    /**
     * @var Tasked_Model_TaskNode
     */
    private $_startNode;

    /**
     * @var Tasked_Model_TaskNode
     */
    private $_finishNode;

    /**
     * Construct
     *
     * @param Tasked_Model_TaskNode $startNode
     * @param Tasked_Model_TaskNode $finishNode
     * @return Tasked_Model_TaskEdge
     */
    public function __construct(
        Tasked_Model_TaskNode $startNode,
        Tasked_Model_TaskNode $finishNode
    )
    {
        $this->_startNode = $startNode;
        $this->_finishNode = $finishNode;
    }

    /**
     * Get Start Node
     *
     * @return Tasked_Model_TaskNode
     */
    public function getStartNode()
    {
        return $this->_startNode;
    }

    /**
     * Get Finish Node
     *
     * @return Tasked_Model_TaskNode
     */
    public function getFinishNode()
    {
        return $this->_finishNode;
    }
}
