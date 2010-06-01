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
 * Resource Test
 *
 * @group       Tasked
 * @group       Model
 * @group       Resource
 * @category    Tasked
 * @package     Tasked_Model
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://www.foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */
class Tasked_Model_ResourceTest extends PHPUnit_Framework_TestCase
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
        $value = 'c9306296-5c9d-11df-8642-7dd5b2fcd846';
        $resource = new Tasked_Model_Resource();
        $this->assertSame(
            $resource,
            $resource->setUuid($value)
        );
        $this->assertSame(
            $value,
            $resource->getUuid()
        );
    }

    public function testSetAndGetTitle()
    {
        $value = 'Test Resource Title';
        $resource = new Tasked_Model_Resource();
        $this->assertSame(
            $resource,
            $resource->setTitle($value)
        );
        $this->assertSame(
            $value,
            $resource->getTitle()
        );
    }

    public function testSetAndGetUpdated()
    {
        $value = new Zend_Date();
        $resource = new Tasked_Model_Resource();
        $this->assertSame(
            $resource,
            $resource->setUpdated($value)
        );
        $this->assertEquals(
            $value,
            $resource->getUpdated()
        );
    }

    public function testSetAndGetNullUpdated()
    {
        $resource = new Tasked_Model_Resource();
        $this->assertSame(
            $resource,
            $resource->setUpdated()
        );
        $this->assertNull(
            $resource->getUpdated()
        );
    }

    public function testSetAndGetPublished()
    {
        $value = new Zend_Date();
        $resource = new Tasked_Model_Resource();
        $this->assertSame(
            $resource,
            $resource->setPublished($value)
        );
        $this->assertEquals(
            $value,
            $resource->getPublished()
        );
    }

    public function testSetAndGetNullPublished()
    {
        $resource = new Tasked_Model_Resource();
        $this->assertSame(
            $resource,
            $resource->setPublished()
        );
        $this->assertNull(
            $resource->getPublished()
        );
    }
}
