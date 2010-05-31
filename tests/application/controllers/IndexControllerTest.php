<?php
/**
 * Tasked
 *
 * @category    Tasked
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://www.foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */

/**
 * Index Controller Test
 *
 * @group       Controller
 * @category    Tasked
 * @copyright   Copyright (c) 2005-2010 Found Line, Inc. (http://www.foundline.com/)
 * @license     http://foundline.com/legal/software-license/ New BSD License
 */
class IndexControllerTest extends Zend_Test_PHPUnit_ControllerTestCase
{
    public function setUp()
    {
        $this->bootstrap = APPLICATION_PATH . '/../tests/application/bootstrap.php';
        parent::setUp();
    }

    public function tearDown()
    {
        /* @var $dbAdapter Zend_Db_Adapter_Abstract */
        $dbAdapter = Zend_Registry::get('db');
        $dbAdapter->closeConnection();
        parent::tearDown();
    }

    public function testIndexActionResponseCodeIs200()
    {
        $this->getRequest()->setMethod('GET');
        $this->dispatch('/');
        $this->assertResponseCode(200);
    }

    public function testIndexActionContentTypeHeaderIsAtomSvc()
    {
        $this->getRequest()->setMethod('GET');
        $this->dispatch('/');
        $this->assertHeaderContains('Content-Type', 'application/atomsvc+xml');
    }

    public function testIndexActionContainsDefaultWorkspaceTitle()
    {
        $this->getRequest()->setMethod('GET');
        $this->dispatch('/');
        $this->assertXpathContentContains(
            '/app:service/app:workspace[1]/atom:title',
            'Default'
        );
    }

    public function testGetActionResponseCodeIs404()
    {
        $this->getRequest()->setMethod('GET');
        $this->dispatch('/index/foo');
        $this->assertResponseCode(404);
    }

    public function testPostActionResponseCodeIs405()
    {
        $this->getRequest()->setMethod('POST');
        $this->dispatch('/index');
        $this->assertResponseCode(405);
    }

    public function testPostActionAllowHeaderIsGet()
    {
        $this->getRequest()->setMethod('POST');
        $this->dispatch('/index');
        $this->assertHeaderContains('Allow', 'GET');
    }

    public function testPutActionResponseCodeIs404()
    {
        $this->getRequest()->setMethod('PUT');
        $this->dispatch('/index/foo');
        $this->assertResponseCode(404);
    }

    public function testDeleteActionResponseCodeIs404()
    {
        $this->getRequest()->setMethod('DELETE');
        $this->dispatch('/index/foo');
        $this->assertResponseCode(404);
    }
}
