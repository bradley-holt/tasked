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
 * Task Test
 *
 * @group       Tasked
 * @group       Model
 * @group       Task
 * @category    Tasked
 * @package     Tasked_Model
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */
class Tasked_Model_TaskTest extends PHPUnit_Framework_TestCase
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

    public function testSetAndGetUuid()
    {
        $value = 'b9506396-5c9d-11df-8642-7dd5b2fcd846';
        $task = new Tasked_Model_Task();
        $this->assertSame(
            $task,
            $task->setUuid($value)
        );
        $this->assertSame(
            $value,
            $task->getUuid()
        );
    }

    public function testSetAndGetTitle()
    {
        $value = 'Test Task Title';
        $task = new Tasked_Model_Task();
        $this->assertSame(
            $task,
            $task->setTitle($value)
        );
        $this->assertSame(
            $value,
            $task->getTitle()
        );
    }

    public function testSetAndGetUpdated()
    {
        $value = new Zend_Date();
        $task = new Tasked_Model_Task();
        $this->assertSame(
            $task,
            $task->setUpdated($value)
        );
        $this->assertEquals(
            $value,
            $task->getUpdated()
        );
    }

    public function testSetAndGetNullUpdated()
    {
        $task = new Tasked_Model_Task();
        $this->assertSame(
            $task,
            $task->setUpdated()
        );
        $this->assertNull(
            $task->getUpdated()
        );
    }

    public function testSetAndGetPublished()
    {
        $value = new Zend_Date();
        $task = new Tasked_Model_Task();
        $this->assertSame(
            $task,
            $task->setPublished($value)
        );
        $this->assertEquals(
            $value,
            $task->getPublished()
        );
    }

    public function testSetAndGetNullPublished()
    {
        $task = new Tasked_Model_Task();
        $this->assertSame(
            $task,
            $task->setPublished()
        );
        $this->assertNull(
            $task->getPublished()
        );
    }

    public function testSetAndGetResource()
    {
        $value = new Tasked_Model_Resource();
        $task = new Tasked_Model_Task();
        $this->assertSame(
            $task,
            $task->setResource($value)
        );
        $this->assertSame(
            $value,
            $task->getResource()
        );
    }

    public function testSetAndGetTargetEdge()
    {
        $startNode = new Tasked_Model_TaskNode(new Zend_Date());
        $finishNode = new Tasked_Model_TaskNode(new Zend_Date());
        $value = new Tasked_Model_TaskEdge($startNode, $finishNode);
        $task = new Tasked_Model_Task();
        $this->assertSame(
            $task,
            $task->setTargetEdge($value)
        );
        $this->assertSame(
            $value,
            $task->getTargetEdge()
        );
    }

    public function testSetAndGetScheduledEdge()
    {
        $startNode = new Tasked_Model_TaskNode(new Zend_Date());
        $finishNode = new Tasked_Model_TaskNode(new Zend_Date());
        $value = new Tasked_Model_TaskEdge($startNode, $finishNode);
        $task = new Tasked_Model_Task();
        $this->assertSame(
            $task,
            $task->setScheduledEdge($value)
        );
        $this->assertSame(
            $value,
            $task->getScheduledEdge()
        );
    }

    public function testSetAndGetActualEdge()
    {
        $startNode = new Tasked_Model_TaskNode(new Zend_Date());
        $finishNode = new Tasked_Model_TaskNode(new Zend_Date());
        $value = new Tasked_Model_TaskEdge($startNode, $finishNode);
        $task = new Tasked_Model_Task();
        $this->assertSame(
            $task,
            $task->setActualEdge($value)
        );
        $this->assertSame(
            $value,
            $task->getActualEdge()
        );
    }
}
