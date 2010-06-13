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
 * Task Node Test
 *
 * @group       Tasked
 * @group       Model
 * @group       TaskNode
 * @category    Tasked
 * @package     Tasked_Model
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */
class Tasked_Model_TaskNodeTest extends PHPUnit_Framework_TestCase
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

    public function testSetAndGetDate()
    {
        $value = new Zend_Date();
        $taskNode = new Tasked_Model_TaskNode($value);
        $this->assertEquals(
            $value,
            $taskNode->getDate()
        );
    }

    public function testSetAndGetNullDate()
    {
        $taskNode = new Tasked_Model_TaskNode();
        $this->assertNull(
            $taskNode->getDate()
        );
    }
}
