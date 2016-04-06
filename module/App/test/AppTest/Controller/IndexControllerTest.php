<?php

namespace AppTest\Controller;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class IndexControllerTest extends AbstractHttpControllerTestCase
{

    public function setUp()
    {
        $this->setApplicationConfig(
               
                include 'config/application.config.php'
        );
        parent::setUp();
    }

    public function testIndexActionCanBeAccessed()
    {
        $this->dispatch('/app');
        $this->assertResponseStatusCode(200);

        $this->assertModuleName('App');
        $this->assertControllerName('App\Controller\Index');
        $this->assertControllerClass('IndexController');
        $this->assertMatchedRouteName('app');
    }

}
