<?php

namespace Salva\PdfJsBundle\Twig\Extension;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Salva\PdfJsBundle\Controller\Controller;

/**
 * Twig extension for the bundle.
 */
class PdfJsExtension extends \Twig_Extension
{
    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'pdfjs';
    }

    /**
     * @var ContainerInterface $container The Symfony2 DIC.
     */
    private $container;

    /**
     * Main constructor.
     *
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * Getter.
     *
     * @return ContainerInterface
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * Getter.
     *
     * @return array
     */
    public function getFunctions()
    {
        return array(
            'pdfjs_render' => new Twig_Function_Method($this, 'pdfJsRender', array('is_safe' => array('html'))),
        );
    }
    
    /**
     *
     * @return $arg or array of $args, depending on number of arguments
     */
    public function pdfJsRender($file)
    {
        return Controller::renderPdf($file);
    }
}
