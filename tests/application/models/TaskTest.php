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
 * Task Test
 * 
 * @group       Tasked
 * @group       Model
 * @group       Task
 * @category    Tasked
 * @package     Tasked_Model
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://www.foundline.com/)
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
        $this->assertEquals(
            $value,
            $task->getResource()
        );
    }

    public function testSetAndGetTargetStart()
    {
        $value = new Zend_Date();
        $task = new Tasked_Model_Task();
        $this->assertSame(
            $task,
            $task->setTargetStart($value)
        );
        $this->assertEquals(
            $value,
            $task->getTargetStart()
        );
    }

    public function testSetAndGetNullTargetStart()
    {
        $task = new Tasked_Model_Task();
        $this->assertSame(
            $task,
            $task->setTargetStart()
        );
        $this->assertNull(
            $task->getTargetStart()
        );
    }

    public function testSetAndGetTargetFinish()
    {
        $value = new Zend_Date();
        $task = new Tasked_Model_Task();
        $this->assertSame(
            $task,
            $task->setTargetFinish($value)
        );
        $this->assertEquals(
            $value,
            $task->getTargetFinish()
        );
    }

    public function testSetAndGetNullTargetFinish()
    {
        $task = new Tasked_Model_Task();
        $this->assertSame(
            $task,
            $task->setTargetFinish()
        );
        $this->assertNull(
            $task->getTargetFinish()
        );
    }

    public function testSetAndGetScheduledStart()
    {
        $value = new Zend_Date();
        $task = new Tasked_Model_Task();
        $this->assertSame(
            $task,
            $task->setScheduledStart($value)
        );
        $this->assertEquals(
            $value,
            $task->getScheduledStart()
        );
    }

    public function testSetAndGetNullScheduledStart()
    {
        $task = new Tasked_Model_Task();
        $this->assertSame(
            $task,
            $task->setScheduledStart()
        );
        $this->assertNull(
            $task->getScheduledStart()
        );
    }

    public function testSetAndGetScheduledFinish()
    {
        $value = new Zend_Date();
        $task = new Tasked_Model_Task();
        $this->assertSame(
            $task,
            $task->setScheduledFinish($value)
        );
        $this->assertEquals(
            $value,
            $task->getScheduledFinish()
        );
    }

    public function testSetAndGetNullScheduledFinish()
    {
        $task = new Tasked_Model_Task();
        $this->assertSame(
            $task,
            $task->setScheduledFinish()
        );
        $this->assertNull(
            $task->getScheduledFinish()
        );
    }

    public function testSetAndGetActualStart()
    {
        $value = new Zend_Date();
        $task = new Tasked_Model_Task();
        $this->assertSame(
            $task,
            $task->setActualStart($value)
        );
        $this->assertEquals(
            $value,
            $task->getActualStart()
        );
    }

    public function testSetAndGetNullActualStart()
    {
        $task = new Tasked_Model_Task();
        $this->assertSame(
            $task,
            $task->setActualStart()
        );
        $this->assertNull(
            $task->getActualStart()
        );
    }

    public function testSetAndGetActualFinish()
    {
        $value = new Zend_Date();
        $task = new Tasked_Model_Task();
        $this->assertSame(
            $task,
            $task->setActualFinish($value)
        );
        $this->assertEquals(
            $value,
            $task->getActualFinish()
        );
    }

    public function testSetAndGetNullActualFinish()
    {
        $task = new Tasked_Model_Task();
        $this->assertSame(
            $task,
            $task->setActualFinish()
        );
        $this->assertNull(
            $task->getActualFinish()
        );
    }
}
