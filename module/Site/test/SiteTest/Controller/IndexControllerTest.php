<?php

namespace SiteTest\Controller;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class HomeControllerTest extends AbstractHttpControllerTestCase
{

    public function setUp()
    {
        $this->setApplicationConfig(
               
                include 'config/application.config.php'
        );
        parent::setUp();
    }

    public function testHomeActionCanBeAccessed()
    {
        $this->dispatch('/');
        $this->assertResponseStatusCode(200);

        $this->assertModuleName('Site');
        $this->assertControllerName('Site\Controller\Home');
        $this->assertControllerClass('HomeController');
        $this->assertMatchedRouteName('home');
    }

}
