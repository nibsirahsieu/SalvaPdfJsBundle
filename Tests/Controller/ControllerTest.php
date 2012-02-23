<?php

namespace Salva\PdfJsBundle\Tests\Controller;

use Salva\PdfJsBundle\Controller\Controller;

class ControllerTest extends \PHPUnit_Framework_TestCase
{
    public function testSanitize()
    {
        $file = 'uploads/docs/mypdf.pdf';
        $file1 = '/uploads/docs/mypdf.pdf';
        $expectedFile = '/uploads/docs/mypdf.pdf';
        
        $container = $this->getMock('Symfony\Component\DependencyInjection\ContainerInterface');
        $controller = new Controller($container);
        
        $this->assertEquals($expectedFile, $controller->sanitize($file));
        $this->assertEquals($expectedFile, $controller->sanitize($file1));
    }
}