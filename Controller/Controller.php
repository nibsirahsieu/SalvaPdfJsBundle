<?php

namespace Salva\PdfJsBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerInterface;

class Controller
{
    protected $container;
    
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     *
     * @param string $file the pdf file to show (relative to your website root directory).
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function render($file)
    {
        if ('/' !== \substr($file, 0, 1)) {
            $file = '/'.$file;
        }

        return $this->container->get('templating')->renderResponse('SalvaPdfJsBundle::pdfjs.html.twig', array(
            'file'      => $file,
        ));
    }
}