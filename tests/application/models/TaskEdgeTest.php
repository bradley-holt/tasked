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
 * Task Edge Test
 *
 * @group       Tasked
 * @group       Model
 * @group       TaskNodeRelation
 * @category    Tasked
 * @package     Tasked_Model
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://www.foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */
class Tasked_Model_TaskEdgeTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        include APPLICATION_PATH . '/../tests/application/bootstrap.php';
        parent::setUp();
    }

    public function tearDown()
    {
        parent::tearDown();
    }

    public function testSetAndGetTaskNodeA()
    {
        $startNode = new Tasked_Model_TaskNode();
        $finishNode = new Tasked_Model_TaskNode();
        $taskEdge = new Tasked_Model_TaskEdge($startNode, $finishNode);
        $this->assertSame(
            $startNode,
            $taskEdge->getStartNode()
        );
    }

    public function testSetAndGetTaskNodeB()
    {
        $startNode = new Tasked_Model_TaskNode();
        $finishNode = new Tasked_Model_TaskNode();
        $taskEdgeRelation = new Tasked_Model_TaskEdge($startNode, $finishNode);
        $this->assertSame(
            $finishNode,
            $taskEdgeRelation->getFinishNode()
        );
    }
}
